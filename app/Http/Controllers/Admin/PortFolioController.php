<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use Illuminate\Support\Str;

class PortFolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('Admin.Portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Portfolio.create');
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
        'title' => 'required',
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
            $request_data['img'] = $mydata;
        }

        $chapter = Portfolio::create($request_data);  
       session()->flash('success' , 'Portfolio Added Successfully');
        return redirect()->route('admin.portfolio.index');

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
        $portfolio = Portfolio::find($id);
        return view('Admin.Portfolio.edit', compact('portfolio', 'id'));
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
        'title' => 'required',
        'category' => 'required',
        'description' => 'required',
        ]);
        $request_data = $request->except(['token']);
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = 'portfolio'.'_'.time().'.'.$ext;
            $request_data['img'] = $filename;
            $file->storeAs('public/portfolio', $filename);   
        }
        else {
            $request_data['img'] = 'no-image.png';
        }
        $portfolio = Portfolio::find($id);
        $portfolio->fill($request_data)->save();
       session()->flash('success' , 'Experience Updated Successfully');
        return redirect()->route('admin.portfolio.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
       session()->flash('success' , 'Portfolio Deleted Successfully');
        return redirect()->route('admin.portfolio.index');

    }
}
