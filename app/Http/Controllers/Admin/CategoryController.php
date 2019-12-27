<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Category;
use Validator,Redirect,Response,File;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array(
        'name'=>'required',
        'image'=>'required|image|max:2048',
        'slug' => 'required',
      ));

      $image = $request->file('image');

      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images'), $new_name);

      $category = new Category;
      $category->name = $request->name;
      $category->image = $new_name;
      $category->description = $request->description;
      $category->slug = $request->slug;
      $category->status =$request->has('status');

      $category->save();

      return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $categories = Category::findOrFail($id);
        return view('admin.category.show',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $categories = Category::findOrFail($id);
        return view('admin.category.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Category $category)
    {

        $category->name = $request->name;
        $category->description = $request->description;
        $category->slug = $request->slug;
        $category->status = $request->input('status', 0);


          if($request->has('image')) {
              $image = $request->file('image');
              $filename = $image->getClientOriginalName();
              $image->move(public_path('images/'), $filename);
              $category->image = $request->file('image')->getClientOriginalName();
          }

          $category->update();

          return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      category::where('id', $id)->delete();

      return redirect()->back();
    }
}
