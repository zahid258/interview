<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class HrModel
{
    public function  get_country()
    {
        return  DB::table('hr_level_detail')->get();
    }
}
