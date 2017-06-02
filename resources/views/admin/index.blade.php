@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                welcome to main admin page, {{$user->name}}<br>

                <a href={{ route('admin::user.index')}}>Users</a> /
                <a href={{ route('admin::category.index') }}>Categories</a> /
                <a href={{ route('admin::ad.index') }}>Ads</a>

            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h2>Users</h2><br>
                @foreach($users as $user)
                    {{ $user->name }} <br>
                @endforeach<br>
            </div>
            <div class="col-md-4">
                <h2>Categories</h2><br>
                @foreach($categories as $category)
                    {{ $category->title }} <br>
                @endforeach<br>
            </div>
            <div class="col-md-4">
                <h2>Ads</h2><br>
                @foreach($ads as $ad)
                    {{ $ad->title }} <br>
                @endforeach<br>
            </div>
        </div>
    </div>
    <a href="{{ URL::previous() }}">Back</a>

@endsection