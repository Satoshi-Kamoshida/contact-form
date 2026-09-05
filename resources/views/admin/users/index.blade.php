@extends('layout.app')

@section('css')
    @vite('resources/css/admin.css')
@endsection

@section('content')

    <div class="admin">
        <div class="admin__heading">
            <h2>ユーザー管理</h2>
        </div>

        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th>登録日時</th>
                    <th>操作</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <a href="/admin/users/{{ $user->id }}">
                                詳細
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="admin__back">
            <a href="/admin">管理者画面へ戻る</a>
        </div>
    </div>

@endsection