<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class RegionController extends Controller
{

    public function index()
    {

        return Region::with('country')->get();
    }


    public function store(Request $request)
    {

        return Region::create($request->all());
    }


    public function show($id)
    {

        return Region::findOrFail($id);
    }


    public function update(Request $request,$id)
    {

        $region = Region::findOrFail($id);

        $region->update($request->all());

        return $region;
    }


    public function destroy($id): JsonResponse
    {

        Region::destroy($id);

        return response()->json([
            'message'=>'Region deleted'
        ]);
    }


    public function districts($id)
    {

        return District::where('region_id',$id)->get();
    }

}