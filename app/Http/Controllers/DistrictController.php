<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Council;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DistrictController extends Controller
{

    public function index()
    {

        return District::with('region')->get();
    }


    public function store(Request $request)
    {

        return District::create($request->all());
    }


    public function show($id)
    {

        return District::findOrFail($id);
    }


    public function update(Request $request,$id)
    {

        $district = District::findOrFail($id);

        $district->update($request->all());

        return $district;
    }


    public function destroy($id): JsonResponse
    {

        District::destroy($id);

        return response()->json([
            'message'=>'District deleted'
        ]);
    }


    public function councils($id)
    {

        return Council::where('district_id',$id)->get();
    }

}