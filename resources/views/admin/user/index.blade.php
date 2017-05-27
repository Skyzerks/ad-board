@extends('layouts.app')

@section('content')
{{--    {{$users}}--}}

    <div class="container">
        <h2>Users</h2>
        <p>The table that contains information about users</p>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Is_admin</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->is_admin}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>

                    <td><form action="{{ route('admin::user.destroy', [
                    'id' => $user->id]) }}" method="post">

                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit">Delete</button>

                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection