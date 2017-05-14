<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User, Category, Ad};
use App\Http\Controllers\Controller;


class MainController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function showMain()
    {
        $categories = Category::all();

        return view('main', ['categories' => $categories]);
    }
}
