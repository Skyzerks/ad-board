@extends('layouts.app')

@section('title', 'Information about user')

@section('content')

<h3>{{ trans('index_info.info') }}{{ $user->name }}</h3><br>

Name: {{$user->name}}<br>
@if($user->is_admin==1)
    Admin
@else
    User
@endif<br>
Email: {{$user->email}}<br>
Registered: {{$user->created_at}} <br>
Profile updated: {{$user->updated_at}} <br>
<br><a href="{{ URL::previous() }}">Back</a>

@endsection