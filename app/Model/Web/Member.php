<?php

namespace App\Model\Web;

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
}
