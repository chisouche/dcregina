<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Portfolio;
use App\Model\user\Category;
use Validator,Redirect,Response,File;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $portfolios = Portfolio::all();
      $categories = Category::all();
        return view('admin.portfolio.index',compact('portfolios','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();
      return view('admin.portfolio.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,array(
        'name'=>'required',
        'description'=> 'required',
        'category_id' => 'required|integer',
        'image'=>'required|image',
        'slug' => 'required',
      ));

      $image = $request->file('image');

      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images'), $new_name);

      $portfolio = new portfolio;
      $portfolio->name = $request->name;
      $portfolio->description = $request->description;
      $portfolio->image = $new_name;
      $portfolio->details = $request->details;
      $portfolio->category_id = $request->category_id;
      $portfolio->slug = $request->slug;
      $portfolio->status = $request->input('status',0);
      $portfolio->save();

      return redirect(route('portfolio.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $portfolios = Portfolio::findOrFail($id);
        return view('admin.portfolio.show',compact('portfolios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $portfolios = Portfolio::findOrFail($id);
      $categories = Category::all();
        return view('admin.portfolio.edit',compact('portfolios', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
      $portfolio->name = $request->name;
      $portfolio->description = $request->description;
      $portfolio->category_id = $request->category_id;
      $portfolio->slug = $request->slug;
      $portfolio->details= $request->details;
      $portfolio->status = $request->input('status', 0);


        if($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/'), $filename);
            $portfolio->image = $request->file('image')->getClientOriginalName();
        }

        $portfolio->update();

        return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      portfolio::where('id', $id)->delete();
      return redirect()->back();
    }
}
