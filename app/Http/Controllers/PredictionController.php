<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Carbon\Carbon;
use App\PeakSeason;
class PredictionController extends Controller
{


  public function price(Request $request){

    $leastDate =  Carbon::createMidnightDate(2015, 1, 1);
    $date = Carbon::parse($request->date);
    $noOfDays = $leastDate->diffInDays($date);
    $product = $request->product;
    $client = new Client(); //GuzzleHttp\Client

    $result = $client->post('http://fortesting.pythonanywhere.com/predict', [
      'form_params' => [
        'date' => $noOfDays,
        'product'=>$product
      ]
    ]);


    $responseJSON = json_decode($result->getBody(), true);

    return response($responseJSON, 200);
  }

  public function peak(Request $request){
    $leastDate =  Carbon::createMidnightDate(2015, 1, 1);
    $date = Carbon::parse($request->date);
    $noOfDays = $leastDate->diffInDays($date);
    $product = $request->product;
    $client = new Client(); //GuzzleHttp\Client

    $result = $client->post('http://fortestingemail23.pythonanywhere.com/predict', [
      'form_params' => [
        'date' => $noOfDays,
        'product'=>$product
      ]
    ]);


    $responseJSON = json_decode($result->getBody(), true);

    return response($responseJSON, 200);
  }
}
