<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Member extends Model
{
    protected $table = 'member';

    public function getAllMember()
    {
        return DB::table($this->table)
            ->select('id', 'member_name', 'position', 'avatar', 'role')
            ->orderByRaw('ISNULL(position), position ASC')
            ->orderByDesc('id')
            ->get();
    }

    public function addNewMember($name, $position, $avatar, $role)
    {
        $member = new Member();
        $member->member_name = $name;
        $member->position = $position;
        $member->avatar = $avatar;
        $member->role = $role;
        $member->description = '';
        return $member->save();
    }

    public function deleteMember($id)
    {
        return DB::table($this->table)
            ->where('id', $id)
            ->delete();
    }
}
