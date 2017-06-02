@extends('layouts.app')

@section('content')
{{--    {{$users}}--}}
 {{--{{dd(date("D M j G:i:s T Y"))}}--}}
    <div class="container">
        <h2 style="color:palevioletred">{{ trans('index_info.user_main') }}</h2>
        <p>{{ trans('index_info.user') }}</p>
        <td>
            <form action="{{ route('admin::user.create') }}" method="get">
                <button type="submit">{{ trans('buttons.create') }}</button>
            </form>
        </td>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ trans('index_info.tr_id') }}</th>
                <th>{{ trans('index_info.tr_name') }}</th>
                <th>{{ trans('index_info.tr_email') }}</th>
                <th>{{ trans('index_info.tr_admin') }}</th>
                <th>{{ trans('index_info.tr_created') }}</th>
                <th>{{ trans('index_info.tr_updated') }}</th>
                <th>{{ trans('index_info.tr_delete') }}</th>
                <th>{{ trans('index_info.tr_update') }}</th>
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

                            <button type="submit">{{ trans('buttons.delete') }}</button>

                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin::user.edit', [
                    'id' => $user->id]) }}" method="get">

                            <button type="submit">{{ trans('buttons.edit') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            {{$users->links()}}
        </table>
    </div>
@endsection