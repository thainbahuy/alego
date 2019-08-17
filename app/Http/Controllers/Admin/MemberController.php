<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Model\Admin\Member;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MemberController extends Controller
{
    private $member;

    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    public function index()
    {
        $listMember = $this->member->getAllMember();
        return view('admin/member/list_member', compact('listMember'));
    }

    public function showAddMember()
    {
        return view('admin/member/add');
    }

    public function addNewMember(MemberRequest $request)
    {
        $name = $request->get('name');
        $position = $request->get('position');
        $role = $request->get('role');
        $avatar = $request->get('avatar');

        if ($this->member->addNewMember($name, $position, $avatar, $role) == true) {
            return redirect()->back()->with('message-success', 'Add Member');
        } else {
            return redirect()->back()->with('message-fail', 'Add Member');
        }
    }

    public function deleteBackgroundId(Request $request){
        $id = $request->get('id');
        if ($this->member->deleteMember($id) == 1) {
            return response()->json(['status' => 'success'], Response::HTTP_OK);
        } else {
            return response()->json(['status' => 'fail'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
