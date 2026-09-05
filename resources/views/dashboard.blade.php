@extends('layout.app')

@section('content')

    <div class="dashboard">

        <h2>ダッシュボード</h2>

        <div class="dashboard-card">

            <h3>
                ようこそ、{{ Auth::user()->name }}さん！
            </h3>

            <p>
                メールアドレス：{{ Auth::user()->email }}
            </p>

            <p>
                登録日：{{ Auth::user()->created_at->format('Y年m月d日') }}
            </p>

        </div>

    </div>

@endsection