<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\ActivityResource;

class ActivityController extends Controller
{

    public function index()
    {

        $activities = Activity::with('forum')->paginate(20);

        return ActivityResource::collection($activities);
    }


    public function store(Request $request)
    {

        $activity = Activity::create($request->all());

        return new ActivityResource($activity);
    }


    public function show($id)
    {

        return new ActivityResource(
            Activity::findOrFail($id)
        );
    }


    public function update(Request $request,$id)
    {

        $activity = Activity::findOrFail($id);

        $activity->update($request->all());

        return new ActivityResource($activity);
    }


    public function destroy($id): JsonResponse
    {

        Activity::destroy($id);

        return response()->json([
            'message'=>'Activity deleted'
        ]);
    }

}