<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Knowledge;
class KnowledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knows = Knowledge::all();
        return view('Admin.Knowledge.index', compact('knows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Knowledge.create');
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
        ]);
        $chapter = Knowledge::create($request->all());  
       session()->flash('success' , 'Knowledge Added Successfully');
        return redirect()->route('admin.knowledge.index');
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
        $know = Knowledge::find($id);
        return view('Admin.Knowledge.edit', compact('know', 'id'));
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
        ]);
        $request_data = $request->all();
        $home = Knowledge::find($id);
        $home->fill($request_data)->save();
       session()->flash('success' , 'Knowledge Updated Successfully');
        return redirect()->route('admin.knowledge.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $know = Knowledge::find($id);
        $know->delete();
       session()->flash('success' , 'Knwoledge Deleted Successfully');
        return redirect()->route('admin.knowledge.index');

    }
}
