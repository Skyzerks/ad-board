<?php
/**
 * Created by PhpStorm.
 * User: Nemo
 * Date: 17.05.2017
 * Time: 19:30
 */

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