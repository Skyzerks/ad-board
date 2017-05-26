@extends('layouts.app')

@section('title', 'Categories')

@section('content')


    {{--    {{ dd($GLOBALS) }}--}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h2>Categories</h2><br>
            @foreach($categories as $category)
                {{ $category->title }} <br>
            @endforeach<br>
        </div>
        <div class="col-md-6">
            <h2>Ads</h2><br>
            @foreach($ads as $ad)
                {{ $ad->title }} <br>
            @endforeach<br>
        </div>
    </div>
</div>
    <a href="{{ URL::previous() }}">Back</a>

@endsection