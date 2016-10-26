<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TitanicController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = \DB::table('titanic')->paginate(15);

    return view('titanic', ['data' => $data]);
  }
}
