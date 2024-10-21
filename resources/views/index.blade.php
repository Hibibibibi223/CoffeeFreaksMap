<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home CFM</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- <link rel="stylesheet" type="text/css" href="blog/public/css/styles.css" />  -->
        <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles改.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>

    <body>
        <!-- —————— ヘッダー ——————————————— -->
        <header class="main_header">
            <div class="container">
                <!-- —————— ロゴ ——————————————— -->
                <div class="area_logo_header">
                    <a class="logo" href="/">
                        <h1 class="char_logo">Coffee Freaks Map</h1>
                    </a>
                </div>

                <!-- —————— 検索窓エリア ——————————————— -->
                <!-- <form role="search" aria-label="サイト内検索">
                    <label for="search-input"></label>
                    <input type="search" id="search-input" name="q" placeholder="キーワードを入力" required>
                    <button type="submit">検索</button>
                </form> -->

                <!-- —————— ナビゲーション ——————————————— -->
                <nav class="area_nav_header">
                    <ul class="list_nav_header">
                        <li>
                            <a href="timeline" class="menu_list_nav">
                                タイムライン
                            </a>
                        </li>
                        <li>
                            <a href="post/index" class="menu_list_nav">
                                探す
                            </a>
                        </li>
                        <li>
                            <a href="post" class="menu_list_nav">
                                記録する
                            </a>
                        </li>
                        <li>
                            <a href="mypage" class="menu_list_nav">
                                マイページ
                            </a>
                        </li>
                    </ul>
                </nav>   
            </div>
        </header>

        <main>
            <div class="quick-access">
                <a href="timeline">タイムライン</a>
            </div>
            
            <div class="serch-navigation">
                <div class="ranking-display">
                    <div class="quick-access">
                        <a href="searchURL">探す</a>
                    </div>
                    <div class="recent-ranking">
                        <!-- 3~5件投稿を抜き出して表示 -->
                    </div>
                </div>
            </div>

            <div class="post-navigation">
                <div class="ranking-display">
                    <div class="quick-access">
                        <a href="postURL">記録する</a>
                    </div> 
                    <div class="recent-ranking">
                        <!-- 3~5件投稿を抜き出して表示 -->
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
