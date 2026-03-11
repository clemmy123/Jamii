<?php

namespace App\Http\Controllers;

use App\Models\Funding;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\FundingResource;

class FundingController extends Controller
{

    public function index()
    {

        $funding = Funding::paginate(20);

        return FundingResource::collection($funding);
    }


    public function store(Request $request)
    {

        $funding = Funding::create($request->all());

        return new FundingResource($funding);
    }


    public function show($id)
    {

        return new FundingResource(
            Funding::findOrFail($id)
        );
    }


    public function update(Request $request,$id)
    {

        $funding = Funding::findOrFail($id);

        $funding->update($request->all());

        return new FundingResource($funding);
    }


    public function destroy($id): JsonResponse
    {

        Funding::destroy($id);

        return response()->json([
            'message'=>'Funding removed'
        ]);
    }

}