@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Edit user</h1>
                <form role="form" method="POST" action="{{ route('admin::user.update', ['user' => $user->id])}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT"/>

                    {{--<input type="hidden" name="_token" value="{{csrf_token()}}"/>--}}

                    <div class="form-group">


                        <input type="text" name="name" value="{{$user->name}}" >
                        <input type="email" name="email" value="{{$user->email}}">
                        <input type="checkbox" id="is_admin" name="is_admin" {{$check}}>
                        <label for="is_admin">Change admin rights?</label>
                    </div>

                    <button type="submit" class="btn btn-default">Update</button>
                </form>


            </div>
        </div>
    </div>
@endsection