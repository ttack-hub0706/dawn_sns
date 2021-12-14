<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <!--IEブラウザ対策-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="ページの内容を表す文章" />
    <title></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <!--スマホ,タブレット対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--サイトのアイコン指定-->
    <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
    <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
    <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
    <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
    <!--iphoneのアプリアイコン指定-->
    <link rel="apple-touch-icon-precomposed" href="画像のURL" />
    <!--OGPタグ/twitterカード-->
</head>
<body>
    <header>
        <div id = "head">
         <h1><a href="/logout"><img class="img_logout" src="images/main_logo.png"></a></h1>
            <div id="head_wrapper">
                <div id="head_user">
                    <p class="head_user_name">{{ auth()->user()->username }}さん
                    </p>
                    <div class="arrow_box">
                     <div class="arrow" data-target="syncer-acdn">
                     </div>
                    </div>
                    <img class="users_img" src="images/dawn.png">
                </div>
                <div class="ac_btn">
                    <ul id="syncer-acdn" >
                     <li><a href="/top">ホーム</a></li>
                     <li><a href="/profile">プロフィール</a></li>
                     <li><a href="/logout">ログアウト</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div id="row">
        <div id="container">
            @yield('content')
        </div >
        <div id="side-bar">
            <div id="confirm">
                <p>{{ auth()->user()->username}}さんの</p>
                <div>
                <p>フォロー数</p>
                <p>{{ $userFollowing }}名</p>
                </div>
                <p class="btn"><a class="btn_a" href="/follow-list">フォローリスト</a></p>
                <div>
                <p>フォロワー数</p>
                <p>{{ $userBeingFollowed }}名</p>
                </div>
                <p class="btn"><a class="btn_a" href="/follower-list">フォロワーリスト</a></p>
            </div>
            <p class="btn"><a class="btn_a"href="">ユーザー検索</a></p>
        </div>
    </div>
    <footer>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/style.js') }}" ></script>
</body>
</html>
