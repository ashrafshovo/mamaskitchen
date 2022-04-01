<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Slider;
use App\Models\Reservation;
use App\Models\Contact;

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
}
