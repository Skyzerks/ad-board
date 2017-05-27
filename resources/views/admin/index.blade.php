@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                welcome to main admin page, {{$user->name}}

                <br>
                <a href={{ route('admin::user.index')}}>Users</a> /
                <a href={{ route('admin::category.index') }}>Categories</a> /
                <a href={{ route('admin::ad.index') }}>Ads</a>


            </div>
        </div>
    </div>

@endsection