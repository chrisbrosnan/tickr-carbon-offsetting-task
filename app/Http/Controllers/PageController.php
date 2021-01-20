<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Http\Controllers\ResultsController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PageController extends Controller
{

  public function __construct(ResultsController $results)
  {
    $this->results = $results;
  }

  public function getHomepage(Request $request)
  {
    $formHeader = 'Carbon Offsetting Membership Schedule';
    return view('welcome', compact('formHeader'));
  }

  public function getResults(Request $request)
  {
    $data = $this->results->getResults($request);
    return $this->showResults($request, $data);
  }

  public function showResults($request, $data)
  {
    $scheduleData = response()->json($data)->getData();
    $resultsHeader = 'Your Carbon Offsetting Membership Schedule';
    return view('carbon-offset', compact('resultsHeader', 'scheduleData'));
  }

}
