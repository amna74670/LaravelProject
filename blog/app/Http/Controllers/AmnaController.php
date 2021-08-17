<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmnaController extends Controller
{
    public function amnaView()
    {
      return view('amna');
    }

    public function amna1View()
    {
      return view('amna1');
    }

    public function amna2View()
    {
      return view('amna2');
    }
}
