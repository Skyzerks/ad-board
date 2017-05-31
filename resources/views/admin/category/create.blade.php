@extends('layouts.app')

@section('content')
    <h1>Create new category</h1>
    <form role="form" method="POST" action="{{ route('admin::category.store')}}">
        {{ csrf_field() }}

        <div class="form-group">

            <input type="text" name="title" placeholder="Enter category">
        </div>

        <button type="submit" class="btn btn-default">Create</button>
    </form>

@endsection