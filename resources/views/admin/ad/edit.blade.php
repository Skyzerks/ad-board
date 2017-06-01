@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Edit ad post</h1>
                <form role="form" method="POST" action="{{ route('admin::ad.update', ['ad' => $ad->id])}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT"/>

                    {{--<input type="hidden" name="_token" value="{{csrf_token()}}"/>--}}

                    <div class="form-group">


                        <input type="text" name="name" value="{{$ad->title}}">
                        <input type="text" name="email" value="{{$ad->text}}">
                    </div>

                    <button type="submit" class="btn btn-default">Update</button>
                </form>


            </div>
        </div>
    </div>
@endsection