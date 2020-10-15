<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>PHP課題_INPUT</title>
</head>

<body>
    <div class="menu">
        <h3>アンケート入力フォーム</h3>
    </div>

    <form action="write.php" method="post">
        名前: <input type="text" name="name">
        EMAIL: <input type="text" name="mail"><br/>
        アンケート１（１点～５点で評価）:
        <span class="star-rating">
            1<input type="radio" name="ans_1" value="1">
            2<input type="radio" name="ans_1" value="2">
            3<input type="radio" name="ans_1" value="3">
            4<input type="radio" name="ans_1" value="4">
            5<input type="radio" name="ans_1" value="5">
        </span><br/>
        アンケート２（１点～５点で評価）:
        <span class="star-rating">
            1<input type="radio" name="ans_2" value="1">
            2<input type="radio" name="ans_2" value="2">
            3<input type="radio" name="ans_2" value="3">
            4<input type="radio" name="ans_2" value="4">
            5<input type="radio" name="ans_2" value="5">
        </span><br/>
        アンケート３（１点～５点で評価）:
        <span class="star-rating">
            1<input type="radio" name="ans_3" value="1">
            2<input type="radio" name="ans_3" value="2">
            3<input type="radio" name="ans_3" value="3">
            4<input type="radio" name="ans_3" value="4">
            5<input type="radio" name="ans_3" value="5">
        </span><br/>
        <input type="submit" value="送信">
        <input type="reset" value="回答内容をリセット">
    </form>
    <a href="read.php">これまでの回答結果を見る</a>
</body>

</html>
