<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MrpmautosController extends Controller
{
    public function index()
    {
      return view('mrpmwebsite.index');
    }

    public function services()
    {
      return view('mrpmwebsite.services');
    }

    public function about()
    {
      return view('mrpmwebsite.about');
    }

    public function team()
    {
      return view('mrpmwebsite.team');
    }

    public function contact()
    {
      return view('mrpmwebsite.contact');
    }
}
