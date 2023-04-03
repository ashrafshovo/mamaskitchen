<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HaveALookSlider;
use Carbon\Carbon;
use Illuminate\Support\Str;

class HaveALookSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = HaveALookSlider::all();
        return view('admin.haveslider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.haveslider.create');
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
            'title' => 'required',
            'image' => 'required | image'  //|mimes: jpeg, jpg, bmp, png
        ]);

        $image = $request->file('image');
        $slug = Str::slug($request->title);

        if (isset ($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/slider')) {
                mkdir('uploads/haveslider', 0777, true);
            }
            $image->move('uploads/haveslider', $imagename);
        }
        else {
            $imagename = 'default.png';
        }

        $slider = new HaveALookSlider();
        $slider->title = $request->title;
        $slider->image = $imagename;
        $slider->save();

        return redirect()->route('haveslider.index')->with('successMsg','Slider Successfully Saved');
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
        $slider = HaveALookSlider::find($id);
        return view('admin.haveslider.edit', compact('slider'));
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
            'title' => 'required',
            'image' => 'image'  //|mimes: jpeg, jpg, bmp, png
        ]);

        $image = $request->file('image');
        $slug = Str::slug($request->title);

        $slider = HaveALookSlider::find($id);

        if (isset ($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if (!file_exists('uploads/haveslider')) {
                mkdir('uploads/slider', 0777, true);
            }
            if(file_exists('uploads/haveslider/'.$slider->image)){
                unlink('uploads/haveslider/'.$slider->image); //delete file from the server
            }
            $image->move('uploads/haveslider', $imagename);
        }
        else {
            $imagename = $slider->image;
        }

        $slider->title = $request->title;
        $slider->image = $imagename;
        $slider->save();

        return redirect()->route('haveslider.index')->with('successMsg','Slider Successfully Updated');
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
        $slider = HaveALookSlider::find($id);

        if (file_exists('uploads/haveslider/'.$slider->image))
        {
            unlink('uploads/haveslider/'.$slider->image); //delete file from the server
        }
        
        $slider->delete();

        return redirect()->back()->with('successMsg', 'Slider Successfully Deleted');
    }
}
