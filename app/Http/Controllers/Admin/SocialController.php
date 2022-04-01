<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Social;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $social = Social::find(1);

        return view('admin.social.index', compact('social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.social.create');
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
        $this->validate( $request, [
            'facebook' => 'required',
            'twitter' => 'required',
            'google_plus' => 'required',
            'linkedin' => 'required'
        ]);

        $social = New Social();
        $social->facebook = $request->facebook;
        $social->twitter = $request->twitter;
        $social->google_plus = $request->google_plus;
        $social->linkedin = $request->linkedin;
        $social->save();

        return redirect(route('social.index'))->with('successMsg', 'Social Links Successfully Saved.');
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
        $social = Social::find($id);
        return view('admin.social.view', compact('social'));
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
        $social = Social::find($id);

        return view('admin.social.edit', compact('social'));
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
        $this->validate( $request, [
            'facebook' => 'required',
            'twitter' => 'required',
            'google_plus' => 'required',
            'linkedin' => 'required'
        ]);

        $social = Social::find($id);
        $social->facebook = $request->facebook;
        $social->twitter = $request->twitter;
        $social->google_plus = $request->google_plus;
        $social->linkedin = $request->linkedin;
        $social->save();

        return redirect(route('social.index'))->with('successMsg', 'Social Links Successfully Updated.');
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
    }
}
