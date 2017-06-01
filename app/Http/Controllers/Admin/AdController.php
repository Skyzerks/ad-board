<?php

namespace App\Http\Controllers\Admin;

use App\{Category, User, Ad};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AdRepository;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = (new AdRepository)->getAds();

        return view('admin.ad.index', ['ads' => $ads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $users = User::all();
        $categories = Category::all();

        return view('admin.ad.create',
            ['user' => $user, 'users' => $users, 'categories' => $categories]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'user_id' => 'required',
            'category_id' => 'required'
        ]);
        $ad = new Ad();
        $ad->title = $request->get('title');
        $ad->text = $request->get('text');
        $ad->user_id = $request->get('user_id');
        $ad->category_id = $request->get('category_id');
        $ad->save();
        return redirect('/admin/ad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad::findOrFail($id);

        return view('admin.ad.edit', ['ad' => $ad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ad = Ad::findOrFail($id);
        $ad->title = $request->get('title');
        $ad->text = $request->get('text');
        $ad->user_id = $request->get('user_id');
        $ad->category_id = $request->get('category_id');
        $ad->save();
        return redirect('/admin/ad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $ad=Ad::destroy($id);
        return redirect('/admin/ad');
    }
}
