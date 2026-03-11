<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CountryController extends Controller
{

    public function index()
    {

        return Country::get();
    }


    public function store(Request $request)
    {

        return Country::create($request->all());
    }


    public function show($id)
    {

        return Country::findOrFail($id);
    }


    public function update(Request $request,$id)
    {

        $country = Country::findOrFail($id);

        $country->update($request->all());

        return $country;
    }


    public function destroy($id): JsonResponse
    {

        Country::destroy($id);

        return response()->json([
            'message'=>'Country deleted'
        ]);
    }


    public function regions($id)
    {

        return Region::where('country_id',$id)->get();
    }

}