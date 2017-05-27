<?php

namespace App\Repositories;

use DB;
use App\Category;

class CategoryRepository
{
    public function getCategories()
    {
//        $res = DB::select('select * from categories');
        $res = Category::all();
        return $res;
    }
}