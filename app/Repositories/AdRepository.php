<?php

namespace App\Repositories;

use DB;
use App\Ad;

class AdRepository
{
    public function getAds()
    {
//        $res = DB::select('select * from ads');
        $res = Ad::all();
        return $res;
    }
}