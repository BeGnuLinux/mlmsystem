<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Continent;

class ContinentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function all() {
        $continents = Continent::all();

        if(sizeof($continents) < 1) {
            return response()->json(['status' => 'fial', 'message' => 'No Continents found.']);
        } else {
            return response()->json(['status' => 'success', 'continents' => $continents], 200);
        }
    }

    public function add(Request $request) {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $continent = Continent::create([
            'name' => $request->name
        ]);
        if(!$continent) {
            return response()->json(['status' => 'fial', 'message' => 'Can not add Continent.']);
        } else {
            return response()->json(['status' => 'success', 'continent' => $continent], 200);
        }
    }

    //
}
