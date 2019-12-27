<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Product;
//use App\Model\user\Tag;
use App\Model\user\Category;
use Validator,Redirect,Response,File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();
      $categories = Category::all();
        //$tags = Tag::all();
        return view('admin.product.index',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
          $categories = Category::all();
          //$tags = Tag::all();
        return view('admin.product.create',compact('products','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //validate the data
        $this->validate($request,[
          'name'        =>'required',
          'description' => 'required',
          'category_id' => 'required|integer',
          'image'       =>'required|image',
          'slug'        => 'required',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $product  = new Product;
        $product->name          = $request->name;
        $product->description   = $request->description;
        $product->image         = $new_name;
        $product->catalog       = $request->catalog;
        $product->category_id   = $request->category_id;
        $product->slug          = $request->slug;
        $product->owner         = $request->owner;
        $product->price         = $request->price;
        $product->status        = $request->input('status',0);
        $product->save();
         //$product->tags()->sync($request->tags, false);

        return redirect(route('product.index', $product->id));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $products = Product::findOrFail($id);
      return view('admin.product.show')->withProducts($products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $products = Product::findOrFail($id);
      $categories = Category::all();
    //  $tags = Tag::all();

      return view('admin.product.edit' ,compact('products', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

      $product->name = $request->name;
      $product->description = $request->description;
      $product->catalog = $request->catalog;
      $product->category_id = $request->category_id;
      // $post->tags()->sync($request->tags);
      $product->slug = $request->slug;
      $product->owner = $request->owner;
      $product->price = $request->price;
      $product->status = $request->input('status',0);


        if($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/'), $filename);
            $products->image = $request->file('image')->getClientOriginalName();
        }

        $product->update();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      product::where('id', $id)->delete();
      return redirect()->back();
    }
}
