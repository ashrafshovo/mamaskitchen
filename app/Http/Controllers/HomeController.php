<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Category;
use App\Item;
use App\HaveAlookSlider;
use App\MenuCategory;
use App\FeaturedDish;
use App\About;
use App\Beer;
use App\Bread;
use App\Social;
use App\Footer;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $categories = Category::all();
        $items = Item::all();
        $havelooksliders = HaveAlookSlider::all();
        $menucategories = MenuCategory::all();
        $featureddishes = FeaturedDish::all();
        $specialdishes = FeaturedDish::where('status', true)
                        ->orderBy('price', 'DESC')
                        ->get();
        $abouts = About::all();
        $beers = Beer::all();
        $breads = Bread::all();
        $social = Social::all()->first();
        $footers = Footer::all()->first();

        //dd($featureddishes);

        return view('welcome', compact('sliders', 'categories', 'items', 'havelooksliders', 'menucategories', 'featureddishes', 'specialdishes', 'abouts', 'beers', 'breads', 'social','footers'));
    }

    public function temp()
    {
        return view('login');
    }
}
