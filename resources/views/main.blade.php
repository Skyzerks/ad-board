@extends('layouts.app')

@section('title', 'Main page')

@section('content')

    <h1>Головна сторінка</h1>

    <div class="catalog">

        @foreach( $categories as $key => $category )

            {{--/category/2--}}
            <a href="{{ route('category',['id' => $category->id]) }}">
                {{ $category->title }}
            </a>

            <p>{{ ++$key }}. {{ $category->title }}</p>

            @if( $category->ads()->count() > 0 )
                @foreach($category->mainPageAds as $key2 => $ad)
                    <p>{{ ++$key2 }}. {{ $ad->title }}</p>
                @endforeach
            @endif

        @endforeach

    </div>
    <form method="POST" action="/profile">
            {{ csrf_field() }}

    </form>
@endsection
