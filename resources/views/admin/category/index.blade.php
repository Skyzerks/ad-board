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
        <h2>{{ trans('index_info.category_main') }}</h2>
        <p>{{ trans('index_info.category') }}</p>
        <td>
            <form action="{{ route('admin::category.create') }}" method="get">
                <button type="submit">{{ trans('buttons.create') }}</button>
            </form>
        </td>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ trans('index_info.tr_id') }}</th>
                <th>{{ trans('index_info.tr_title') }}</th>
                <th>{{ trans('index_info.tr_created') }}</th>
                <th>{{ trans('index_info.tr_updated') }}</th>
                <th>{{ trans('index_info.tr_delete') }}</th>
                <th>{{ trans('index_info.tr_update') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>

                    <td>
                        <form action="{{ route('admin::category.destroy', [
                    'id' => $category->id]) }}" method="post">

                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit">{{ trans('buttons.delete') }}</button>

                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin::category.edit', [
                    'id' => $category->id]) }}" method="get">

                            <button type="submit">{{ trans('buttons.edit') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection