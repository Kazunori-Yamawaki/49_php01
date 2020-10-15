<?php

// POSTデータ取り込み
$name = $_POST['name'];
$mail = $_POST['mail'];
$ans_1 = $_POST['ans_1'];
$ans_2 = $_POST['ans_2'];
$ans_3 = $_POST['ans_3'];

function h($str){
    return htmlspecialchars($str,ENT_QUOTES);
};

// 時間データ取得
date_default_timezone_set('Asia/Tokyo');
$time = date("Y/m/d H:i:s");

// データ配列を作成
$answer = array($time,$name,$mail,$ans_1,$ans_2,$ans_3);

// csvデータに書き込み
$file = fopen("./data/data.csv","a");
fputcsv($file,$answer);
fclose($file);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>次の内容で回答データを保存しました。</h1>
    <br/>
    回答時間：<?= $time ?>
    <br/>
    お名前：<?= h($name) ?>
    <br/>
    EMAIL：<?= h($mail) ?>
    <br/>
    アンケート１回答：<?= h($ans_1) ?>
    <br/>
    アンケート２回答：<?= h($ans_2) ?>
    <br/>
    アンケート３回答：<?= h($ans_3) ?>
    <br/>
    <a href="index.php">回答フォームに戻る</a>
    <br/>
    <a href="read.php">これまでの回答結果を見る</a>
</body>

</html>
