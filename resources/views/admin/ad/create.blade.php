@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create new ad</h1>
                <form role="form" method="POST" action="{{ route('admin::ad.store')}}">
                    {{ csrf_field() }}
                    <div class="form-group">

                        <input type="text" name="name" placeholder="Enter user name">
                        <input type="text" name="email" placeholder="Enter user email">
                    </div>

                    <button type="submit" class="btn btn-default">Create</button>
                </form>


            </div>
        </div>
    </div>
@endsection