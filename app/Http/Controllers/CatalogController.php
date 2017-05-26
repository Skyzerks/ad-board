<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
use App\Ad;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{

    public function showCategory($id = null)
    {
        $ads = null;
        if( !$id ) {
            $ads = Ad::all();
        }
        else {
            $category = Category::findOrFail($id);
        }
        return view('category',
            [
                'categories' => Category::all(),
                'ads' => $ads ?? $category->ads
            ]
        );
    }

    public function createCategory( Request $request )
    {
        $this->validate($request, [
            'title' => 'required'
        ]);
        $user = Auth::user();
        $category = new Category();
        $category->title = $request->get('title');
        $category->user()->associate($user);
        $category->save();
    }

}
