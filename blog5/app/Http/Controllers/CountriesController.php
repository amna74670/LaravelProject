<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    public function index()
    {
      $countries = Country::all();
      return view('countries.index', compact('countries'));
    }

    public function create()
    {
      return view('countries.create');
    }

    public function store(Request $request)
    {
      $countryData = new Country();
      $countryData->name = $request->CountryName;
      $countryData->save();
      return redirect('/countries');
    }
}
