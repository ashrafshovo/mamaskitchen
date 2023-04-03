<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Auth;
use Mail;

use App\Mail\AdminEmailConfirmed;
//use App\Notifications\AdminEmailConfirmed;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        //echo json_encode($users);
        return view('admin.admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|string|min:8',
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->Password);
        $token = Str::random(15);
        $user->remember_token = $token;
        $user->about = 'N/A';
        $user->save();

        //Notification::send($token, new AdminEmailConfirmed($request->email));
        
        //Notification::route('confirm', $request->email)->notify(new AdminEmailConfirmed($request->email));

        Mail::to($request->email)->send(new AdminEmailConfirmed($user));

        //dd("done");

        Toastr::success('Admin added successfully.', 'Success', 
            [
                "positionClass" =>  "toast-top-right",
                "closeButton" => true,
                "progressBar" => true
            ]);

        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if(Auth::user()->id == $id){
            return redirect()->route('admin.profile');
        }
        else{
            $user = User::find($id);

            return view('admin.admin.view', compact('user'));    
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('admin.admin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required'
        ]);
        
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        //Toastr::success('Admin successfully updated.', 'Success', ["positionClass" =>  "toast-top-right"]);

        return redirect()->route('admin.index')->with('successMsg', 'Admin Successfully Updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::find($id)->delete();

        //Toastr::success('Admin deleted successfully.', 'Success', ["positionClass" =>  "toast-top-right"]);

        return redirect()->back()->with('successMsg', 'Admin Successfully Deleted');;
    }

    public function confirm($token)
    {
        $user = User::where('remember_token', $token)->first();

        if (!is_null($user)) {
            $user->confirm_email=1;
            $user->save();

            Toastr::success('Your email has been verified.', 'Success', 
                [
                    "positionClass" =>  "toast-top-right",
                    "closeButton" =>true,
                    "progressBar" =>true
                ]);

            return view('admin.password', compact('user'));

        }

        Toastr::error('Someting went wrong.', 'Error', 
            [
                "positionClass" =>  "toast-top-right",
                "closeButton" =>true,
                "progressBar" =>true
            ]);

        return redirect(route('login'));
    }

    public function password(Request $request, $token)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'remember_token' => 'required|string'
        ]);

        $user = User::where('remember_token', $token)->first();

        //dd($user);
        if($user){
            $user->password = Hash::make($request->password);

            $user->remember_token  = '';
            $user->save();


            Toastr::success('Password successfully saved.', 'Success', 
                [
                    "positionClass" =>  "toast-top-right",
                    "closeButton" =>true,
                    "progressBar" =>true
                ]);

            return redirect(route('login'));

        }
        else{
            Toastr::error('Someting went wrong.', 'Error', 
                [
                    "positionClass" =>  "toast-top-right",
                    "closeButton" =>true,
                    "progressBar" =>true
                ]);

            return redirect(route('login'));
        }
    }
}
