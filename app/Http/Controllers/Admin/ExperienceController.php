<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Experience;
class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exps = Experience::all();
        return view('Admin.Experience.index', compact('exps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Experience.create');
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
        'company_name' => 'required',
        'job_title' => 'required',
        'from' => 'required',
        'to' => 'required',
        'description' => 'required',
        ]);
        $chapter = Experience::create($request->all());  
       session()->flash('success' , 'Experience Added Successfully');
        return redirect()->route('admin.experience.index');

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
        $skills = Experience::find($id);
        return view('Admin.Experience.edit', compact('skills', 'id'));
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
        'company_name' => 'required',
        'job_title' => 'required',
        'from' => 'required',
        'to' => 'required',
        'description' => 'required',
        ]);
        $request_data = $request->all();
        $home = Experience::find($id);
        $home->fill($request_data)->save();
       session()->flash('success' , 'Experience Updated Successfully');
        return redirect()->route('admin.experience.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Experience::find($id);
        $skill->delete();
       session()->flash('success' , 'Experience Deleted Successfully');
        return redirect()->route('admin.experience.index');

    }
}
