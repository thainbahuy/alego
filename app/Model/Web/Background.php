<?php

namespace App\Model\Web;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Background extends Model
{
    protected $table = 'background';

    public function getAllBackground()
    {
        return DB::table($this->table)
            ->select('*')
            ->orderByRaw('ISNULL(position), position ASC')
            ->orderByDesc('id')
            ->get();
    }
}
