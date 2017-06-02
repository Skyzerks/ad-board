@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create new ad</h1>
                <form role="form" method="POST" action="{{ route('admin::ad.store')}}">
                    {{ csrf_field() }}
                    <div class="form-group">

                        <input type="text" name="title" placeholder="Enter ad title">
                        <input type="text" name="text" placeholder="Write about the created topic">
                        <select class="select" name="user_id">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        <select class="select" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Create</button>
                </form>


            </div>
        </div>
    </div>
@endsection