<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FeaturedDish;
use App\Models\MenuCategory;
use Brian2694\Toastr\Facades\Toastr;


class FeaturedDishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = FeaturedDish::all();
        return view('admin.featureddish.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = MenuCategory::all();

        return view('admin.featureddish.create', compact('categories'));
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
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'peo' => 'required',
            'ple' => 'required',
            'price' => 'required'
        ]);

        
        $item = new FeaturedDish();
        $item->menu_category_id = $request->category;
        $item->title = $request->name;
        $item->about = $request->description;
        $item->peo = $request->peo;
        $item->ple = $request->ple;
        $item->price = $request->price;
        $item->save();

        return redirect()->route('featureddish.index')->with('successMsg', 'Featured Dish Successfully Saved');
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
        $item = FeaturedDish::find($id);
        $categories = MenuCategory::all();

        return view('admin.featureddish.edit', compact('item', 'categories'));
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
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'peo' => 'required',
            'ple' => 'required',
            'price' => 'required'
        ]);

        
        $item = FeaturedDish::find($id);
        $item->menu_category_id = $request->category;
        $item->title = $request->name;
        $item->about = $request->description;
        $item->peo = $request->peo;
        $item->ple = $request->ple;
        $item->price = $request->price;
        $item->save();
        return redirect()->route('featureddish.index')->with('successMsg', 'Featured Dish Successfully Updated');
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
        FeaturedDish::find($id)->delete();
        return redirect()->back()->with('successMsg', 'Featured Dish Successfully Deleted');
    }

    public function status($id)
    {
        //
        $reservation = FeaturedDish::find($id);

        $reservation->status = true;

        $reservation->save();

        Toastr::success('Feeatured Dish specialed successfully.', 'Success', ["positionClass" =>  "toast-top-right"]);
        
        return redirect()->back();
    }

    public function unstatus($id)
    {
        //
        $reservation = FeaturedDish::find($id);

        $reservation->status = false;

        $reservation->save();

        Toastr::success('Feeatured Dish unspecialed successfully.', 'Success', ["positionClass" =>  "toast-top-right"]);
        
        return redirect()->back();
    }
}
