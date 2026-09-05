<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    @vite([
        "resources/css/sanitize.css",
        "resources/css/common.css"
    ])
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Contact Form
            </a>
            <div class="header__nav">

                @guest

                    <a href="/register" class="header__button header__button--register">
                        ユーザー登録
                    </a>

                    <a href="/login" class="header__button header__button--login">
                        ログイン
                    </a>

                @else

                    <form action="/logout" method="POST">
                        @csrf

                        <button type="submit" class="header__button header__button--logout">
                            ログアウト
                        </button>
                    </form>

                @endguest

            </div>
        </div>
    </header>
    @if (session('success'))
        <div class="flash-message
            @if (session('success') === '登録が完了しました')
                flash-message--register
            @elseif (session('success') === 'ログアウトしました')
                flash-message--logout
            @else
                flash-message--login
            @endif
        ">
            {{ session('success') }}
        </div>
    @endif
    <main>
        @yield('content')
    </main>
</body>

</html>