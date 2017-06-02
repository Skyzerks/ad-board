@extends('layouts.app')

@section('title', 'About')

@section('content')

    <h1>{{ trans('index_info.about') }}</h1><br>

<a href="{{ URL::previous() }}">Back</a>

@endsection