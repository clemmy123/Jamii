<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Street;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class StreetController extends Controller
{

    public function index()
    {

        return Street::with('ward')->get();
    }


    public function store(Request $request)
    {

        return Street::create($request->all());
    }


    public function show($id)
    {

        return Street::findOrFail($id);
    }


    public function update(Request $request,$id)
    {

        $street = Street::findOrFail($id);

        $street->update($request->all());

        return $street;
    }


    public function destroy($id): JsonResponse
    {

        Street::destroy($id);

        return response()->json([
            'message' => 'Street deleted'
        ]);
    }


    public function wards($id)
    {

        return Ward::where('street_id',$id)->get();
    }

}