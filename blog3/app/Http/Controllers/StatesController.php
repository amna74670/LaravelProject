<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

class StatesController extends Controller
{
    public function index()
    {
      $states = State::all();
      return view('states.index', compact('states'));
    }

    public function create()
    {
      return view('states.create');
    }

    public function store(Request $request)
    {
      $stateData = new State();
      $stateData->name = $request->StateName;
      $stateData->status = $request->status;
      $stateData->save();
      return redirect('/states');
    }

    public function show($id)
    {
      $stateData = State::findOrFail($id);
      return view('states.show', compact('stateData'));
    }

    public function edit($id)
    {
      $stateData = State::findOrFail($id);
      return view('states.edit', compact('stateData'));
    }

    public function update(Request $request)
    {
      $stateData = State::findOrFail($id);
      $stateData->name = $request->StateName;
      $stateData->status = $request->Statestatus;
      $stateData->save();
      return redirect('/states');
    }

    public function destroy($id)
    {
      $stateData = State::findOrFail($id);
      $stateData->delete();
      return redirect('/states');
    }

}
