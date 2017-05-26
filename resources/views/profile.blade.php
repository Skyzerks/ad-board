@extends('layouts.app')

@section('title', 'Information about user')

@section('content')

<h3>About {{ $user->name }}</h3><br>

<a href="{{ URL::previous() }}">Back</a>

@endsection