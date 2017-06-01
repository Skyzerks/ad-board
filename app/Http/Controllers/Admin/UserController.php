<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    public function index(Request $request){
        $users = (new UserRepository)->getUsers();
        return view('admin.user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.user.create',
            ['users' => \App\User::all()]
        );
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $check = ($user->is_admin == '1'? 'checked': null);

        return view('admin.user.edit', ['user' => $user, 'check' => $check]);
    }
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = md5($request->get('password'));
        $user->is_admin = ($request->get('is_admin')=='on'?'1':'0');
        $user->save();
        return redirect('/admin/user');
    }
    public function store( Request $request )
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);
        $user = new \App\User();
        $user->is_admin = ($request->get('is_admin') == 'on'? 1 : 0);
        $user->email = $request->get('email');
        $user->name = $request->get('name');
        $user->password = md5('0000'); //TODO: change password granting to new users
        $user->save();
        return redirect('/admin/user');
    }

    public function destroy($id){
        $user=User::destroy($id);
        return redirect('/admin/user');
    }


}
