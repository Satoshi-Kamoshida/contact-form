@extends('layout.app')

@section('css')
    @vite('resources/css/admin.css')
@endsection

@section('content')

    <div class="admin">
        <div class="admin__heading">
            <h2>お問い合わせ管理</h2>
        </div>

        <table class="contact-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>お名前</th>
                    <th>メールアドレス</th>
                    <th>電話番号</th>
                    <th>お問い合わせ内容</th>
                    <th>送信日時</th>
                    <th>操作</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->tel }}</td>
                        <td>{{ $contact->content }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>
                            <a href="/admin/contacts/{{ $contact->id }}">
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