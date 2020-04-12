<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GsController extends Controller
{
    public function showGsData()
    {
      // $gsData = urlencode("http://gsx2json.com/api?id=1hKp7M3wLhj0cPEmFO51iWCIyyZRt68iHne_GQEeIG1g");
      $data = file_get_contents('http://gsx2json.com/api?id=1hKp7M3wLhj0cPEmFO51iWCIyyZRt68iHne_GQEeIG1g&columns=false');
      $gData = json_decode($data);
      // dd($gData);
      return view('pages.home',['data'=>$gData->rows]);
    }
}
