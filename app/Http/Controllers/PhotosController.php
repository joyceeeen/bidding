<?php

namespace App\Http\Controllers;

use App\Photos;
use Illuminate\Http\Request;
use Image;
use File;
use Vinkla\Hashids\Facades\Hashids;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('products.add-photos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $product = Hashids::decode($request->product)[0];
        // foreach ($files as $file) {
          $thumbnailImage = Image::make($file);
          $originalPath = 'images/products/'.$request->product.'/';

          if (!File::exists($originalPath)) {
            File::makeDirectory($originalPath, 0775, true, true);
          }

          $filename = $originalPath.time().uniqid().'.'.$file->getClientOriginalExtension();
          $thumbnailImage->save($filename);

          $upload = new Photos();
          $upload->img_path = $filename;
          $upload->product_id = $product;
          $upload->save();
          return response()->json(['success'=>$filename]);

        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function show(Photos $photos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function edit(Photos $photos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photos $photos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photos $photos)
    {
        //
    }
}
