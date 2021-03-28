<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Home;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::first();
        return view('Admin.Home.index', compact('home'));
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
        $home = Home::find($id);
        return view('Admin.Home.edit', compact('home','id'));

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
        'job_title' => 'required',
        'img.*' => 'mimes:png,PNG.JPG,jpg,JPEG,jpeg',
        ]);
        $request_data = $request->except(['token']);
        if ($request->file('img') != null) {
            foreach($request->file('img') as $file)
            {
                $ext = $file->getClientOriginalExtension();
                $filename = 'home'.'_'.time().Str::random(8).'.'.$ext;
                $file->storeAs('public/home', $filename);
                $mydata[] = $filename;  
            }
            $request_data['img'] = $mydata;
        }

        $home = Home::find($id);
        $home->fill($request_data)->save();
       session()->flash('success' , 'Home Page Updated Successfully');
        return redirect()->route('admin.home.index');

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
