@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Edit user</h1>
                <form role="form" method="POST" action="{{ route('admin::category.update', ['category' => $category->id])}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT"/>
                    {{--<input type="hidden" name="_token" value="{{csrf_token()}}"/>--}}

                    <div class="form-group">
                        <input type="text" name="title" value="{{$category->title}}" >
                    </div>

                    <button type="submit" class="btn btn-default">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection