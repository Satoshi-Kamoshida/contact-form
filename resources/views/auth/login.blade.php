@extends('layout.app')

@section("css")
    @vite('resources/css/login.css')
@endsection

@section('content')

    <div class="auth-form">

        <h2>ログイン</h2>

        <form action="/login" method="POST">
            @csrf

            <div class="login-form__group">
                <label class="login-form__label">
                    メールアドレス
                </label>

                <input type="email" name="email" class="login-form__input">

                @error('email')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="login-form__group">
                <label class="login-form__label">
                    パスワード
                </label>

                <input type="password" name="password" class="login-form__input">

                @error('password')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="login-form__button">
                ログイン
            </button>
        </form>

        <a href="/register">
            アカウントをお持ちでない方はこちら
        </a>

    </div>

@endsection