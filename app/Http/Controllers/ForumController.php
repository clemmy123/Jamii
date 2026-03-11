<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\ForumResource;
use App\Http\Requests\Forum\StoreForumRequest;
use App\Http\Requests\Forum\UpdateForumRequest;

class ForumController extends Controller
{

    public function index()
    {

        $forums = Forum::with(['members','sectors'])->paginate(20);

        return ForumResource::collection($forums);
    }


    public function store(StoreForumRequest $request)
    {

        $forum = Forum::create($request->validated());

        return new ForumResource($forum);
    }


    public function show($id)
    {

        $forum = Forum::with(['members','sectors'])->findOrFail($id);

        return new ForumResource($forum);
    }


    public function update(UpdateForumRequest $request,$id)
    {

        $forum = Forum::findOrFail($id);

        $forum->update($request->validated());

        return new ForumResource($forum);
    }


    public function destroy($id): JsonResponse
    {

        $forum = Forum::findOrFail($id);

        $forum->delete();

        return response()->json([
            'message'=>'Forum deleted'
        ]);
    }

}