@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

<h2>新規ユーザー登録</h2>

{{ Form::label('ユーザー名') }}
{{ Form::text('username',null,['class' => 'input', 'placeholder' => 'ユーザー名']) }}

{{ Form::label('メールアドレス') }}
{{ Form::text('mail',null,['class' => 'input', 'placeholder' => 'メールアドレス']) }}

{{ Form::label('パスワード') }}
{{ Form::text('password',null,['class' => 'input', 'placeholder' => 'パスワード']) }}

{{ Form::label('パスワード確認') }}
{{ Form::text('password_confirmation',null,['class' => 'input', 'placeholder' => 'パスワード再確認']) }}
{{ Form::submit('登録') }}

<p><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


@endsection
