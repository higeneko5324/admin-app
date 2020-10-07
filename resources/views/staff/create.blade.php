@extends('...layouts.layout')

@section('content')
    投稿作成<br>

    <form action='{{ route('create') }}' method='post'>
        {{ csrf_field() }}
            ユーザーID：<input type='text' name='user_id'><br>
            タイトル：<input type='text' name='title'><br>
            内容：<input type='text' name='content'><br>
            <input type='submit' value='投稿'>
    </form>
@endsection