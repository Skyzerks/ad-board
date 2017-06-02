@extends('layouts.app')

@section('content')
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4">--}}

                {{--welcome to ads table--}}
                {{--{{$ads}}--}}


            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="container">
        <h2>Table of Ads</h2>
        <p>The table that contains ads from different sections</p>
        <td>
            <form action="{{ route('admin::ad.create') }}" method="get">
                <button type="submit">Create</button>
            </form>
        </td>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Text</th>
                <th>User</th>
                <th>Category</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Delete?</th>
                <th>Update?</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ads as $ad)
                <tr>
                    <td>{{$ad->id}}</td>
                    <td>{{$ad->title}}</td>
                    <td>{{$ad->text}}</td>
                    <td>{{$ad->user->name}}</td>
                    <td>{{$ad->category->title}}</td>
                    <td>{{$ad->created_at}}</td>
                    <td>{{$ad->updated_at}}</td>

                    <td><form action="{{ route('admin::ad.destroy', [
                    'id' => $ad->id]) }}" method="post">

                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <button type="submit">Delete</button>

                    </form>
                    </td>
                    <td>
                        <form action="{{ route('admin::ad.edit', [
                    'id' => $ad->id]) }}" method="get">

                            <button type="submit">Edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection