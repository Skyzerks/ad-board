<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User, Category, Ad};
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;

class MainController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function showMain(CategoryRepository $catRepo)
    {
//        $categories = Category::all();
        $categories = Category::paginate(7);

//        foreach ($categories as $category){
//            $category->mainPageAds = $category->ads()->orderBy('created_at', 'desc')->take(5)->get();
//        }

//        dd($categories->with(['ads' => function($query){$query->orderBy('updated_at', 'desc')->take(1); }])->get());

        return view('main', ['categories' => $categories]);
    }
}
