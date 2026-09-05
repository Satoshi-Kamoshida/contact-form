@extends('layout.app')

@section('css')
    @vite('resources/css/admin.css')
@endsection

@section('content')

    <div class="admin">
        <div class="admin__heading">
            <h2>ユーザー詳細</h2>
        </div>

        <table class="detail-table">
            <tr>
                <th>ID</th>
                <td>{{ $user->id }}</td>
            </tr>

            <tr>
                <th>名前</th>
                <td>{{ $user->name }}</td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td>{{ $user->email }}</td>
            </tr>

            <tr>
                <th>登録日時</th>
                <td>{{ $user->created_at }}</td>
            </tr>

            <tr>
                <th>更新日時</th>
                <td>{{ $user->updated_at }}</td>
            </tr>
        </table>

        <div class="admin__back">
            <a href="/admin/users">ユーザー一覧へ戻る</a>
        </div>
    </div>

@endsection