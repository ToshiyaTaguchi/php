<?php

require_once('functions/search_city_time.php');
// require_once関数　指定したファイルを読み込む

$tokyo = searchCityTime('東京');
// 東京の時間を取得し、$tokyo変数に格納

$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
// GETリクエストから送信された都市名をサニタイズし、$city変数に格納

$comparison = searchCityTime($city);
// サニタイズされた都市名の時間を取得し、$comparison変数に格納

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
            World Clock
            </a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"></p>
                        <p class="result-card__time"></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city">
                            <?php echo $tokyo['name']?>
                        </p>
                        <p class="result-card__time">
                        <?php echo $tokyo['time']?>
                        </p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city">
                            <?php echo $comparison['name']?>
                        </p>
                        <p class="result-card__time">
                            <?php echo $comparison['time']?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
