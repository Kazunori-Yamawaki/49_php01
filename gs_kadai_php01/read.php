<?php
// 表テーブルの作成
echo "<table>
<tr>
    <th>日時</th>
    <th>名前</th>
    <th>e-mail</th>
    <th>回答１</th>
    <th>回答２</th>
    <th>回答３</th>            
</tr>";

// ファイルを開く
$openFile = fopen("./data/data.csv","r");

// ファイル内容を1行ずつ読み込んでテーブルに出力
while($data = fgetcsv($openFile)) {
    echo "<tr>";
    for ($i=0;$i<count($data);$i++) {
        echo "<td>" . $data[$i] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// ファイルを閉じる
fclose($openFile);

?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<a href="index.php">回答フォームに戻る</a>
</body>

</html>