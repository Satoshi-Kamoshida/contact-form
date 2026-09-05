@extends('layout.app')

@section('css')
    @vite('resources/css/admin.css')
@endsection

@section('content')

    <div class="admin">
        <div class="admin__heading">
            <h2>管理者画面</h2>
        </div>

        <div class="admin__menu">
            <a href="/admin/users" class="admin__menu-item">
                ユーザー管理
            </a>

            <a href="/admin/contacts" class="admin__menu-item">
                お問い合わせ管理
            </a>
        </div>
    </div>

@endsection