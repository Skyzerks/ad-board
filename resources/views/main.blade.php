@extends('layouts.app')

@section('title', 'Main page')

@section('content')

    <h1>{{ trans('main.header') }}</h1><br>

            {{--<tr>--}}
                {{--<th scope="row">1</th>--}}
                {{--<td>Mark</td>--}}
                {{--<td>Otto</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<th scope="row">4</th>--}}
                {{--<td colspan="2">Larry the Bird</td>--}}
            {{--</tr>--}}

    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Category</th>
                <th>Messages</th>
                <th>Last message</th>
            </tr>
            </thead>
            <tbody>

        @foreach( $categories as $category )
        <tr>
            {{--/category/2--}}
            <td>
                <a href="{{ route('catalog',['id' => $category->id]) }}">{{ $category->title }}</a>
            </td>
            <td>{{$category->ads->count()}}</td>
            <td>
            @foreach($category->ads()->orderBy('created_at', 'desc')->take(1)->get() as $ad)
                    {{$ad->created_at}}<br>
                    {{$ad->title}}<br>
                    {{$ad->user->name}}
            @endforeach
            </td>


{{--            <p>{{ ++$key }}. {{ $category->title }}</p>--}}
            {{--@if( $category->ads()->count() > 0 )--}}
                {{--@foreach($category->mainPageAds as $key2 => $ad)--}}
                    {{--<p>{{ ++$key2 }}. {{ $ad->title }}</p>--}}
                {{--@endforeach--}}
            {{--@endif--}}
        </tr>
        @endforeach
        {{$categories->links()}}
            </tbody>
        </table>
    </div>
    <form method="POST" action="/profile">
            {{ csrf_field() }}

    </form>
@endsection
