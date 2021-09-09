<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaksweetController extends Controller
{
    public function index()
    {
      return view('paksweets.index');
    }
}
