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
  public function index(Request $request)
  {
    $data = \App\Passenger::paginate(15);
    $page = (null !== $request->input('page')) ? $request->input('page') : 1;

    return view('titanic', ['data' => $data, 'page' => $page]);
  }

  public function detail($id)
  {
    try
    {
      $passenger = \App\Passenger::whereId($id)->firstOrFail();
    }
    catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
      return redirect()->route('home');
    }
    return \View::make('passenger')->withPassenger($passenger);
  }

  /**
   * Generate excel spreadsheet from data passed in
   *
   * @return \Illuminate\Http\Response
   */
  public function excel($page)
  {

    // set the current page
    \Illuminate\Pagination\Paginator::currentPageResolver(function () use ($page) {
        return $page;
    });

    $data = \App\Passenger::paginate(15);

    // Define the Excel spreadsheet headers
    $dataArray[] = ['id', 'Survived','Class','Last Name','First Name', 'Gender', 'Age', 'No. Siblings', 'No. Parents/Children', 'Ticket', 'Fare', 'Cabin', 'Embarked'];

    foreach ($data as $item) {
        if ($item->survived){
          $item->survived = 'Yes';
        } else {
          $item->survived = 'No';
        }
        $dataArray[] = $item->toArray();
    }
    \Excel::create('passengers', function($excel) use ($dataArray) {

        $excel->setTitle('Passengers');
        $excel->setCreator('Laravel');
        $excel->setDescription('passengers download file');

        // Build the spreadsheet
        $excel->sheet('sheet1', function($sheet) use ($dataArray) {
            $sheet->fromArray($dataArray, null, 'A1', false, false);
        });

    })->export('xlsx');

  }

}
