<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Footer;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $footers = Footer::all();

        return view('admin.footer.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.footer.create');
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
            'app_name' => 'required|string',
            'developer_link' => 'required|string',
            'developer_name' => 'required|string',
            'theme_by' => 'required|string',
            'theme_by_name' => 'required|string'
        ]);

        $footer = New Footer();
        $footer->app_name = $request->app_name;
        $footer->developer_link = $request->developer_link;
        $footer->developer_name = $request->developer_name;
        $footer->theme_by = $request->theme_by;
        $footer->theme_by_name = $request->theme_by_name;
        $footer->save();

        return redirect(route('footer.index'))->with('successMsg', 'Footer Successfully Saved.');
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
        $footer = Footer::find($id);

        return view('admin.footer.edit', compact('footer'));
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
            'app_name' => 'required|string',
            'developer_link' => 'required|string',
            'developer_name' => 'required|string',
            'theme_by' => 'required|string',
            'theme_by_name' => 'required|string'
        ]);

        $footer = Footer::find($id);
        $footer->app_name = $request->app_name;
        $footer->developer_link = $request->developer_link;
        $footer->developer_name = $request->developer_name;
        $footer->theme_by = $request->theme_by;
        $footer->theme_by_name = $request->theme_by_name;
        $footer->save();

        return redirect(route('footer.index'))->with('successMsg', 'Footer Successfully Updated.');
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
