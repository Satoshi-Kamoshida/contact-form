@extends('layout.app')

@section("css")
    @vite('resources/css/register.css')
@endsection

@section('content')

    <div class="register">

        <div class="register__heading">
            <h2>ユーザー登録</h2>
        </div>

        <form action="/register" method="POST">
            @csrf

            <div class="register-form__group">
                <label class="register-form__label">
                    名前
                </label>

                <input type="text" name="name" class="register-form__input">

                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="register-form__group">
                <label class="register-form__label">
                    メールアドレス
                </label>

                <input type="email" name="email" class="register-form__input">

                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="register-form__group">
                <label class="register-form__label">
                    パスワード
                </label>

                <input type="password" name="password" class="register-form__input">

                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="register-form__group">
                <label class="register-form__label">
                    パスワード（確認）
                </label>

                <input type="password" name="password_confirmation" class="register-form__input">
            </div>

            <button type="submit" class="register-form__button">
                登録
            </button>
        </form>

        <div class="register__login-link">
            <a href="/login">
                すでにアカウントをお持ちの方はこちら
            </a>
        </div>

    </div>

@endsection