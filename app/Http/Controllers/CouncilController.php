<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Council;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CouncilController extends Controller
{

    public function index()
    {

        return Council::with('district')->get();
    }


    public function store(Request $request)
    {

        return Council::create($request->all());
    }


    public function show($id)
    {

        return Council::findOrFail($id);
    }


    public function update(Request $request,$id)
    {

        $council = Council::findOrFail($id);

        $council->update($request->all());

        return $council;
    }


    public function destroy($id): JsonResponse
    {

        Council::destroy($id);

        return response()->json([
            'message'=>'Council deleted'
        ]);
    }


    public function wards($id)
    {

        return Ward::where('council_id',$id)->get();
    }

}