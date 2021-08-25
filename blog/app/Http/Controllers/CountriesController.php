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

    public function show($id)
    {
      $countryData = Country::findOrFail($id);
      return view('countries.show', compact('countryData'));
    }

    public function edit($id)
    {
      $countryData = Country::findOrFail($id);
      return view('countries.edit', compact('countryData'));
    }

    public function update(Request $request, $id)
    {
      $countryData = Country::findOrFail($id);
      $countryData->name = $request->CountryName;
      $countryData->save();
      return redirect('/countries');
    }

    public function destroy($id)
    {
      $countryData = Country::findOrFail($id);
      $countryData->delete();
      return redirect('/countries');
    }

}
