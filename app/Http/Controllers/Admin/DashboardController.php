<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Slider;
use App\Models\Reservation;
use App\Models\Contact;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Auth;
use Hash;

class DashboardController extends Controller
{
    //
    public function index() {

    	$categories = Category::count();
    	$items = Item::count();
    	$sliders = Slider::count();
    	$reservations = Reservation::where('status', false)->get();
    	$contacts = Contact::count();

        return view('admin.dashboard', compact('categories', 'items', 'sliders', 'reservations', 'contacts'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function user_update(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
        ]);
        
        $user = Auth::user();

        //print_r($user);

        $user->name = $request->name;
        $user->about = $request->about;
        $user->save();

        Toastr::info('Profile Updated.', 'Info', 
            [
                "positionClass" =>  "toast-top-right",
                "closeButton" => true,
                "progressBar" => true
            ]);

        return back();//->with('successMsg', 'Profile Updated');
    }

    public function admin_settings()
    {
        return view('admin.admin-password');
    }

    public function admin_settings_update(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|string|min:8|confirmed',    
        ]);

        $user = Auth::user();

        //dd($user);
        if($user){
            $user->password = Hash::make($request->password);

            $user->save();


            Toastr::success('Password successfully changed.', 'Success', 
                [
                    "positionClass" =>  "toast-top-right",
                    "closeButton" =>true,
                    "progressBar" =>true
                ]);

            return redirect(route('admin.profile'));

        }
    }

    public function admin_profile_picture()
    {
        return view('admin.admin-pro-pic');
    }

    public function admin_profile_picture_update(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image',    
        ]);

        $user = Auth::user();

        //dd($user);
        if($user && $user->image != 'default.png'){
        $image = $request->file('image');
        $slug = Str::slug($user->name);

        if (isset ($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/user')) {
                mkdir('uploads/user', 0777, true);
            }

            if(file_exists('uploads/user/'.$user->image)){
                unlink('uploads/user/'.$user->image); //delete file from the server
            }

            $image->move('uploads/user', $imagename);
        }
        else {
            $imagename = 'default.png';
        }

        $user->image = $imagename;
        $user->save();

        Toastr::success('Picture changed.', 'Success', 
                [
                    "positionClass" =>  "toast-top-right",
                    "closeButton" =>true,
                    "progressBar" =>true
                ]);

            return redirect(route('admin.profile'));

        }
    }


}
