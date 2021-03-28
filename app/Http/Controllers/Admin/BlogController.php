<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Str;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('Admin.Blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.blog.create');
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
        'category' => 'required',
        'description' => 'required',
        ]);
        $request_data = $request->except(['token']);
        if ($request->hasFile('img')) {
            foreach($request->file('img') as $file)
            {
                $ext = $file->getClientOriginalExtension();
                $filename = 'portfolio'.'_'.time().Str::random(8).'.'.$ext;
                $file->storeAs('public/blogs', $filename);
                $mydata[] = $filename;  
            }
            $request_data['img'] = $mydata;
        }

        $chapter = Blog::create($request_data);  
       session()->flash('success' , 'Portfolio Added Successfully');
        return redirect()->route('admin.blog.index');

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
        $blog = Blog::find($id);
        return view('Admin.Blog.edit', compact('blog', 'id'));
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
        'category' => 'required',
        'description' => 'required',
        ]);
        $request_data = $request->except(['token']);
        if ($request->file('img') != null) {
            foreach($request->file('img') as $file)
            {
                $ext = $file->getClientOriginalExtension();
                $filename = 'portfolio'.'_'.time().Str::random(8).'.'.$ext;
                $file->storeAs('public/portfolio', $filename);
                $mydata[] = $filename;  
            }
            $request_data['img'] = json_encode($mydata);
        }
        $portfolio = Blog::find($id);
        $portfolio->fill($request_data)->save();
       session()->flash('success' , 'Blog Updated Successfully');
        return redirect()->route('admin.blog.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Blog::find($id);
        $portfolio->delete();
       session()->flash('success' , 'Portfolio Deleted Successfully');
        return redirect()->route('admin.blog.index');

    }
}
