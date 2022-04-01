<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\AdminEmailConfirmed;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Notification;

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
            'email' => 'email|required|unique:users'
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $token = str_random(15);
        $user->token = $token;
        $user->about = 'N/A';
        $user->save();

        Notification::send($token, new AdminEmailConfirmed($request->email));

        Toastr::success('Admin added successfully.', 'Success', ["positionClass" =>  "toast-top-right"]);

        return redirect()->route('admin.index');
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
        $user = User::find($id);

        return view('admin.admin.view', compact('user'));
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
            'email' => 'email|required|unique:users'
        ]);
        
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        Toastr::success('Admin successfully updated.', 'Success', ["positionClass" =>  "toast-top-right"]);

        return redirect()->route('admin.index');
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

        Toastr::success('Admin deleted successfully.', 'Success', ["positionClass" =>  "toast-top-right"]);

        return redirect()->back();
    }

    public function confirm($token)
    {
        $user = User::where('token', $token)->first();

        if (!is_null($user)) {
            $user->confirm_email=1;
            //$user->token = '';
            $user->save();

            Toastr::success('Your email has been verified.', 'Success', ["positionClass" =>  "toast-top-right"]);

            return view('password', compact('token'));

        }
        Toastr::error('Someting went wrong.', 'Error', ["positionClass" =>  "toast-top-right"]);

        return redirect(route('login'));
    }

    public function password(Request $request, $token)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed'
        ]);
        
        $user = User::where('token', $token)->first();
        //dd($user);
        $user->password = bcrypt($request->password);
        $user->token  = '';
        $user->save();

        Toastr::success('Password successfully saved.', 'Success', ["positionClass" =>  "toast-top-right"]);

        return redirect()->route('login');
    }
}
