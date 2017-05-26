@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @foreach($users as $user)

                    {{ $user->name }}

                    <form action="{{ route('admin::user.destroy', [
                    'id' => $user->id]) }}" method="post">

                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <button type="submit">DELETE</button>

                    </form>

                @endforeach


            </div>
        </div>
    </div>
@endsection