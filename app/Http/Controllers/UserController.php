<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Products;
use App\IdentificationPhotos;
use File;
use Image;
use Vinkla\Hashids\Facades\Hashids;
class UserController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    if(auth()->check() && (auth()->user()->is_seller && auth()->user()->is_confirmed > 0)){
      return redirect()->route('product.index');
    }else{
      return view("seller.new-seller");
    }
  }

  public function admin(){
    $users = User::where('is_seller',1)->where('is_confirmed',0)->with('ids')->get();
    return view('admin',compact('users'));
  }

  public function accept(Request $request){
    $id =  Hashids::decode($request->user)[0];
    $user = User::find($id);
    $user->is_confirmed = 1;
    $user->save();

    return redirect()->back();
  }

  public function decline(Request $request){
    $id =  Hashids::decode($request->user)[0];
    $user = User::find($id);
    $user->is_confirmed = -1;
    $user->save();

    return redirect()->back();
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
    $id = Hashids::decode($id)[0];
    $user = User::whereId($id)->where('is_seller',1)->with('products.lastBid')->first();

    return view('seller.profile', compact('user'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request)
  {
    $user = auth()->user();
    $user->is_seller = $request->is_seller;

    $id1_path = $request->file('id1_path');
    $id2_path = $request->file('id2_path');

    //Generate Folder get_include_path
    $originalPath = 'images/ids/'.$user->hash.'/';

    if (!File::exists($originalPath)) {
      File::makeDirectory($originalPath, 0775, true, true);
    }
    //End Folder Path

    $thumbnailImage1 = Image::make($id1_path);
    $filename1 = $originalPath.time().uniqid().'.'.$id1_path->getClientOriginalExtension();

    $thumbnailImage2 = Image::make($id2_path);
    $filename2 = $originalPath.time().uniqid().'.'.$id2_path->getClientOriginalExtension();

    $thumbnailImage1->save($filename1);
    $thumbnailImage2->save($filename2);

    $user_ids = new IdentificationPhotos();

    $user_ids->id1_path = $filename1;
    $user_ids->id2_path = $filename2;
    $user_ids->user_id = $user->id;

    $user_ids->save();
    $user->save();



    return redirect()->route('product.create');
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
