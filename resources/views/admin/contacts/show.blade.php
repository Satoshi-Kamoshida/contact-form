@extends('layout.app')

@section('css')
    @vite('resources/css/admin.css')
@endsection

@section('content')

    <div class="admin">
        <div class="admin__heading">
            <h2>お問い合わせ詳細</h2>
        </div>

        <table class="detail-table">
            <tr>
                <th>ID</th>
                <td>{{ $contact->id }}</td>
            </tr>

            <tr>
                <th>お名前</th>
                <td>{{ $contact->name }}</td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td>{{ $contact->email }}</td>
            </tr>

            <tr>
                <th>電話番号</th>
                <td>{{ $contact->tel }}</td>
            </tr>

            <tr>
                <th>お問い合わせ内容</th>
                <td>{{ $contact->content }}</td>
            </tr>

            <tr>
                <th>送信日時</th>
                <td>{{ $contact->created_at }}</td>
            </tr>
        </table>

        <div class="admin__back">
            <a href="/admin/contacts">お問い合わせ一覧へ戻る</a>
        </div>
    </div>

@endsection