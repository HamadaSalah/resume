<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Education;
class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::all();
        return view('Admin.Education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Education.create');
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
        'university_name' => 'required',
        'grad_title' => 'required',
        'from' => 'required',
        'to' => 'required',
        'description' => 'required',
        ]);
        $chapter = Education::create($request->all());  
       session()->flash('success' , 'Education Added Successfully');
        return redirect()->route('admin.education.index');

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
        $education = Education::find($id);
        return view('Admin.Education.edit', compact('education', 'id'));
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
        'university_name' => 'required',
        'grad_title' => 'required',
        'from' => 'required',
        'to' => 'required',
        'description' => 'required',
        ]);
        $request_data = $request->all();
        $home = Education::find($id);
        $home->fill($request_data)->save();
       session()->flash('success' , 'Education Updated Successfully');
        return redirect()->route('admin.education.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();
       session()->flash('success' , 'Education Deleted Successfully');
        return redirect()->route('admin.education.index');

    }
}
