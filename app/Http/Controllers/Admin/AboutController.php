<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();
        return view('Admin.About.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $about = About::first();
        return view('Admin.About.edit', compact('about', 'id'));
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
        'email' => 'required|email',
        'phone' => 'required',
        'dateOfBirth' => 'required',
        'address' => 'required',
        'nationality' => 'required',
        'profileText' => 'required',
        'resumeFile' => 'mimes:doc,pdf,docx,zip',
        ]);
        $request_data = $request->except(['token']);
        if ($request->hasFile('resumeFile')) {
            $file = $request->file('resumeFile');
            $ext = $file->getClientOriginalExtension();
            $filename = 'resume'.'_'.time().'.'.$ext;
            $file->storeAs('public/resume', $filename);
            $request_data['resumeFile'] = $filename;
        }
        $about = About::find($id);
        $about->fill($request_data)->save();
       session()->flash('success' , 'About Page Updated Successfully');
        return redirect()->route('admin.about.index');

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
