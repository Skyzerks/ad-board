@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create new user</h1>
                <form role="form" method="POST" action="{{ route('admin::user.store')}}">
                    {{ csrf_field() }}
                    <div class="form-group">

                        <input type="text" name="name" placeholder="Enter user name">
                        <input type="email" name="email" placeholder="Enter user email">
                        <input type="checkbox" id="is_admin" name="is_admin">
                        <label for="is_admin">Grant admin rights?</label>
                    </div>

                    <button type="submit" class="btn btn-default">Create</button>
                </form>


            </div>
        </div>
    </div>
@endsection