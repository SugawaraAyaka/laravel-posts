@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="form-wrap col-xs-6 col-lg-5 m-auto">
            <div class="form-group text-center">
                <h2 class="logo-img mx-auto mb-5 mt-5">
                    ログイン
                </h2>
            </div>
            {!! Form::open(['route' => 'login.post']) !!}
            {!! Form::token() !!}
            <div class="form-group">
                {!! Form::email('email', old('email'), ['class' => 'form-control','placeholder' => 'メールアドレス']) !!}
            </div>
            <div class="form-group">
                {!! Form::password('password', ['class' => 'form-control','placeholder' => 'パスワード']) !!}
            </div>
            <div class="actions text-center">
            {!! Form::submit('ログインする', ['class' => 'btn btn btn-danger mt-2']) !!}
            {!! Form::close() !!}
            </div>
            <br>
            <p class="devise-link mt-3 mb-5">
                アカウントをお持ちでないですか？ {!! link_to_route('signup', '新規登録する') !!}
            </p>
        </div>
    </div>
</div>
@endsection
