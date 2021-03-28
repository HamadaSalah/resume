<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Languages;
class LangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $langs = Languages::all();
        return view('Admin.Langs.index', compact('langs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Langs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'percentage' => 'required',
        ]);
        $chapter = Languages::create($request->all());  
       session()->flash('success' , 'Languages Added Successfully');
        return redirect()->route('admin.langs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $langs = Languages::find($id);
        return view('Admin.Langs.edit', compact('langs', 'id'));
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
        $request->validate([
        'name' => 'required',
        'percentage' => 'required',
        ]);
        $request_data = $request->all();
        $home = Languages::find($id);
        $home->fill($request_data)->save();
       session()->flash('success' , 'Language Updated Successfully');
        return redirect()->route('admin.langs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Languages::find($id);
        $skill->delete();
       session()->flash('success' , 'Language Deleted Successfully');
        return redirect()->route('admin.langs.index');

    }
}
