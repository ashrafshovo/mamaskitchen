<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Item;
use App\Models\HaveAlookSlider;
use App\Models\MenuCategory;
use App\Models\FeaturedDish;
use App\Models\About;
use App\Models\Beer;
use App\Models\Bread;
use App\Models\Social;
use App\Models\Footer;
use DB;

class IndexController extends Controller
{
    //
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

        return view('index', compact('sliders', 'categories', 'items', 'havelooksliders', 'menucategories', 'featureddishes', 'specialdishes', 'abouts', 'beers', 'breads', 'social','footers'));
    }
}
