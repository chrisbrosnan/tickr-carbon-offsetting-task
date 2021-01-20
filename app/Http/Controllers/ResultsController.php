<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use DateTime;

class ResultsController extends Controller
{

  public function getResults($request)
  {
    $startDate = $request->input('subscriptionStartDate');
    $subsMonths = $request->input('scheduleInMonths');
    return $this->resultsCalculator($startDate, $subsMonths);
  }

  public function resultsCalculator($start, $months)
  {
    $dataArray = array();
    foreach (range(0, $months - 1) as $n) {
      $firstDate = strtotime($start);
      $thisMonth = date('Y-m-d', strtotime('+'.$n.' month', $firstDate));
      array_push($dataArray, $thisMonth);
    }
    return $this->dateReformatter($dataArray);
  }

  public function dateReformatter($dataArray)
  {
    $newArray = array();
    foreach($dataArray as $d)
    {
      $newFormat = date('d-m-Y', strtotime($d));
      array_push($newArray, $newFormat);
    }
    return $newArray;
  }

}
