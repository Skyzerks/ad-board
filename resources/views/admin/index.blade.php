@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                {{ trans('index_info.admin') }} {{$user->name}}<br>

                <a href={{ route('admin::user.index')}}>{{ trans('index_info.users') }}</a> /
                <a href={{ route('admin::category.index') }}>{{ trans('index_info.categories') }}</a> /
                <a href={{ route('admin::ad.index') }}>{{ trans('index_info.ads') }}</a>

            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h2>{{ trans('index_info.users') }}</h2><br>
                @foreach($users as $user)
                    {{ $user->name }} <br>
                @endforeach<br>
            </div>
            <div class="col-md-4">
                <h2>{{ trans('index_info.categories') }}</h2><br>
                @foreach($categories as $category)
                    {{ $category->title }} <br>
                @endforeach<br>
            </div>
            <div class="col-md-4">
                <h2>{{ trans('index_info.ads') }}</h2><br>
                @foreach($ads as $ad)
                    {{ $ad->title }} <br>
                @endforeach<br>
            </div>
        </div>
    </div>
    <a href="{{ URL::previous() }}">Back</a>

@endsection