<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bread;

class BreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $breads = Bread::all();

        return view('admin.bread.index', compact('breads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.bread.create');
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
            'paragraph' => 'required'
        ]);

        $bread = New Bread();
        $bread->paragraph = $request->paragraph;
        $bread->save();

        return redirect(route('bread.index'))->with('successMsg', 'Bread Paragraph Successfully Saved.');
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
        $bread = Bread::find($id);

        return view('admin.bread.view', compact('bread'));
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
        $bread = Bread::find($id);

        return view('admin.bread.edit', compact('bread'));

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
            'paragraph' => 'required'
        ]);

        $bread = Bread::find($id);
        $bread->paragraph = $request->paragraph;
        $bread->save();

        return redirect(route('bread.index'))->with('successMsg', 'Bread Paragraph Successfully Updated.');
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
