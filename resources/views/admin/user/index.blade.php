@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                welcome to admin page, {{ $user->name }}


                destroy
                edit

                <form action="{{ route('admin::user.create') }}" method="get">
                    <button type="submit">Create</button>
                </form>
                {{--<form action="{{ route('admin::user.update') }}" method="get">--}}
                    {{--<button type="submit">Update</button>--}}
                {{--</form>--}}

            </div>
            <div class="col-md-8">
{{--                <form action="{{ route('admin::user.create') }}--}}
            </div>
        </div>
    </div>
@endsection