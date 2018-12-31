<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Charts\test1;

class chart extends Controller
{
    function index()
    {
      $chart = new test1;
      $id = DB::table('chart')->pluck('id');
      $len1 = DB::table('chart')->pluck('len2');
      $chart ->type('pie');
      $chart ->height(500);
      $chart ->width(700);
      $chart->labels($id);
      $chart->dataset('My dataset 2', 'line', $len1);
      
      return view('goole', ['chart' => $chart]);
    }
}
