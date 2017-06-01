@extends('layouts.app')

@section('content')
{{--    {{$users}}--}}
 {{--{{dd(date("D M j G:i:s T Y"))}}--}}
    <div class="container">
        <h2>Users</h2>
        <p>The table that contains information about users</p>
        <td>
            <form action="{{ route('admin::user.create') }}" method="get">
                <button type="submit">Create</button>
            </form>
        </td>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Delete?</th>
                <th>Edit?</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->is_admin=='1'?'Yes':'No'}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>

                    <td>
                        <form action="{{ route('admin::user.destroy', [
                    'id' => $user->id]) }}" method="post">

                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit">Delete</button>

                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin::user.edit', [
                    'id' => $user->id]) }}" method="get">

                            <button type="submit">Edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection