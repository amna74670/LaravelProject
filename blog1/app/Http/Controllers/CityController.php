<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function index()
    {
      $cities = City::all();
      return view('cities.index', compact('cities'));
    }

    public function create()
    {
      return view('cities.create');
    }

    public function store(Request $request)
    {
      $city = new City();
      $city->name = $request->CityName;
      $city->status = $request->CityStatus;
      $city->save();
      return redirect('/cities');
    }

    public function show($id)
    {
      $cityData = City::findOrFail($id);
      return view('cities.show', compact('cityData'));
    }
}
