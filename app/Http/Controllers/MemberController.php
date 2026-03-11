<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\MemberResource;
use App\Http\Requests\Member\StoreMemberRequest;
use App\Http\Requests\Member\UpdateMemberRequest;

class MemberController extends Controller
{

    public function index()
    {
        $members = Member::with(['forum','street'])->paginate(20);

        return MemberResource::collection($members);
    }


    public function store(StoreMemberRequest $request)
    {

        $member = Member::create($request->validated());

        return new MemberResource($member);
    }


    public function show($id)
    {

        $member = Member::with([
            'forum',
            'street',
            'activities',
            'funding'
        ])->findOrFail($id);

        return new MemberResource($member);
    }


    public function update(UpdateMemberRequest $request,$id)
    {

        $member = Member::findOrFail($id);

        $member->update($request->validated());

        return new MemberResource($member);
    }


    public function destroy($id): JsonResponse
    {

        $member = Member::findOrFail($id);

        $member->delete();

        return response()->json([
            'message'=>'Member deleted successfully'
        ]);
    }


    public function assignForum(Request $request): JsonResponse
    {

        $member = Member::findOrFail($request->member_id);

        $member->forum_id = $request->forum_id;

        $member->save();

        return response()->json([
            'message'=>'Forum assigned'
        ]);
    }

}