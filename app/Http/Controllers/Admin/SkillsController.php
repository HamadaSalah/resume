<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Skills;
class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skills::all();
        return view('Admin.Skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Skills.create');
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
        'years' => 'required',
        'percentage' => 'required',
        ]);
        $chapter = Skills::create($request->all());  
       session()->flash('success' , 'Skill Added Successfully');
        return redirect()->route('admin.skills.index');

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
        $skills = Skills::find($id);
        return view('Admin.Skills.edit', compact('skills', 'id'));
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
        'years' => 'required',
        'percentage' => 'required',
        ]);
        $request_data = $request->all();
        $home = Skills::find($id);
        $home->fill($request_data)->save();
       session()->flash('success' , 'Skill Updated Successfully');
        return redirect()->route('admin.skills.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skills::find($id);
        $skill->delete();
       session()->flash('success' , 'Skill Deleted Successfully');
        return redirect()->route('admin.skills.index');

    }
}
