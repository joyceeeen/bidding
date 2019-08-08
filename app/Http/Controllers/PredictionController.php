<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Carbon\Carbon;
class PredictionController extends Controller
{


  public function price(Request $request){
    $month = Carbon::now()->format('n');

    if($request->month){
      $month = $request->month;
    }

    $client = new Client(); //GuzzleHttp\Client
    $result = $client->post('http://fortesting.pythonanywhere.com/predict', [
      'form_params' => [
        'Month' => $month,
        'name_of_market'=>$request->market
      ]
    ]);


    $responseJSON = json_decode($result->getBody(), true);

    return response($responseJSON, 200);
  }


}
