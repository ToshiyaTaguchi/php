<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
            <!--  header__logoを押すとリンクへ-->
            World Clock
            </a>
        </div>
    </header>
    <main>
        <div class="seach-form__content">
            <div class="search-form__heading">
                <h2>日本と世界の時間を比較</h2>
            </div>
            <form class="search-form" action="result.php" method="get">
            <!-- 送信先"result.php"に指定 method="get" を使用してデータを送信）-->
                <div class="search-form__item">
                    <select class="search-form__item-select" name="city">
                    <!-- select=ドロップダウンリスト、optionタグにてリスト表記 -->
                        <option value="シドニー">シドニー</option>
                        <option value="上海">上海</option>
                        <option value="モスクワ">モスクワ</option>
                        <option value="ロンドン">ロンドン</option>
                        <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                        <option value="ニューヨーク">ニューヨーク</option>
                    </select>
                </div>
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">
                        検索
                    </button>
                    <!-- "button"は、必ずformタグの中！　フォームを送信する-->
                </div>
            </form>
        </div>
    </main>
</body>

</html>
