<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Catalog;
use Validator,Redirect,Response,File;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $catalogs = Catalog::all();
        return view('admin.catalog.index',compact('catalogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.catalog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request,[
        'title'=>'required',
        'content'=>'required|file',
        'slug' => 'required',
      ]);

      // Generate a file name with extension
      $contentName = $request->content->getClientOriginalName();

      // Save the file
       $request->content->move(public_path('catalogs'), $contentName);

      $catalog = new Catalog;
      $catalog->title     = $request->title;
      $catalog->slug      = $request->slug;
      $catalog->content   = $contentName;
      $catalog->status    = $request->input('status', 0);
      $catalog->save();


      return redirect(route('catalog.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $catalogs = Catalog::findOrFail($id);
        return view('admin.catalog.show',compact('catalogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $catalogs = Catalog::findOrFail($id);
        return view('admin.catalog.edit',compact('catalogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalog $catalog)
    {
      if($request->content->getClientOriginalName()) {
          $content = $request->file('content');
          $contentName = $content->getClientOriginalName();
          $content->move(public_path('catalogs/'), $contentName);
      }

      $catalog->title= $request->title;
      $catalog->slug = $request->slug;
      $catalog->content = $request->file('content');
      $catalog->content   = $contentName;
      $catalog->status = $request->input('status', 0);


        $catalog->update();

        return redirect()->route('catalog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      catalog::where('id', $id)->delete();

    return redirect()->back();
    }
}
