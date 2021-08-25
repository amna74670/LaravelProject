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

    public function edit($id)
    {
      $cityData = City::findOrFail($id);
      return view('cities.edit', compact('cityData'));
    }

    public function update(Request $request, $id)
    {
      $cityData = City::findOrFail($id);
      $cityData->name = $request->CityName;
      $cityData->status = $request->CityStatus;
      $cityData->save();
      return redirect('/cities');
    }

    public function destroy($id)
    {
      $cityData = City::findOrFail($id);
      $cityData->delete();
      return redirect('/cities');
    }
}
