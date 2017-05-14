@extends('layouts.app');

@section('title', 'Головна');

@section('content')

    <h1>Головна сторінка</h1>

    <div class="catalog">

        @foreach( $categories as $key => $category )

            <p>{{ ++$key }}. {{ $category->title }}</p>

            @if( $category->ads()->count() > 0 )
                @foreach($category->ads as $key2 => $ad)
                    <p>{{ ++$key2 }}. {{ $ad->title }}</p>
                @endforeach
            @endif

        @endforeach

    </div>

@endsection
