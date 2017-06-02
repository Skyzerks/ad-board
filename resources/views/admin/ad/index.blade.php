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
        <h2>{{ trans('index_info.ad_main') }}</h2>
        <p>{{ trans('index_info.ad') }}</p>
        <td>
            <form action="{{ route('admin::ad.create') }}" method="get">
                <button type="submit">{{ trans('buttons.create') }}</button>
            </form>
        </td>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ trans('index_info.tr_id') }}</th>
                <th>{{ trans('index_info.tr_title') }}</th>
                <th>{{ trans('index_info.tr_text') }}</th>
                <th>{{ trans('index_info.tr_user') }}</th>
                <th>{{ trans('index_info.tr_category') }}</th>
                <th>{{ trans('index_info.tr_created') }}</th>
                <th>{{ trans('index_info.tr_updated') }}</th>
                <th>{{ trans('index_info.tr_delete') }}</th>
                <th>{{ trans('index_info.tr_update') }}</th>
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

                        <button type="submit">{{ trans('buttons.delete') }}</button>

                    </form>
                    </td>
                    <td>
                        <form action="{{ route('admin::ad.edit', [
                    'id' => $ad->id]) }}" method="get">

                            <button type="submit">{{ trans('buttons.edit') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection