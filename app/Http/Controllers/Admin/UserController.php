<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();

        return view('admin.user.index', ['user' => $user]);
    }

    public function create()
    {
        return view('admin.user.create',
            ['users' => \App\User::all()]
        );
    }
    public function edit($id)
    {
        return 1;
    }
    public function update($id)
    {
        return 1;
    }
    public function store( Request $request )
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);
        $user = new \App\User();
        $user->name = $request->get('name');
        $user->save();
        return ;
    }

    public function destroy($id){
        $user=User::destroy($id);
    }


}
