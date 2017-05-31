@extends('layouts.app')

@section('content')
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4">--}}

                {{--welcome to catalog--}}
                {{--{{$categories}}--}}


            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="container">
        <h2>Table of Ads</h2>
        <p>The table that contains ads from different sections</p>
        <td>
            <form action="{{ route('admin::category.create') }}" method="get">
                <button type="submit">Create</button>
            </form>
        </td>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Delete?</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>

                    <td><form action="{{ route('admin::category.destroy', [
                    'id' => $category->id]) }}" method="post">

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