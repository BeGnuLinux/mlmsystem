<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
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
        $countries = Country::all();

        if(sizeof($countries) < 1) {
            return response()->json(['status' => 'fial', 'message' => 'No Countries found.']);
        } else {
            return response()->json(['status' => 'success', 'countries' => $countries], 200);
        }
    }

    public function add(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'lang' => 'required',
            'continent_id' => 'required'
        ]);
        $country = Country::create([
            'name' => $request->name,
            'lang' => $request->lang,
            'continent_id' => $request->continent_id
        ]);
        if(!$country) {
            return response()->json(['status' => 'fial', 'message' => 'Can not add country.'], 404);
        } else {
            return response()->json(['status' => 'success', 'country' => $country], 200);
        }
    }

    //
}
