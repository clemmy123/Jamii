<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Ward;
use App\Models\Street;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class WardController extends Controller
{

    public function index()
    {

        return Ward::with('council')->get();
    }


    public function store(Request $request)
    {

        return Ward::create($request->all());
    }


    public function show($id)
    {

        return Ward::findOrFail($id);
    }


    public function update(Request $request,$id)
    {

        $ward = Ward::findOrFail($id);

        $ward->update($request->all());

        return $ward;
    }


    public function destroy($id): JsonResponse
    {

        Ward::destroy($id);

        return response()->json([
            'message'=>'Ward deleted'
        ]);
    }


    public function streets($id)
    {

        return Street::where('ward_id',$id)->get();
    }

}