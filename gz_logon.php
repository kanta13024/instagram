<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>たび写真館ログオン</title>
</head>
<body style="background-color:lightblue">
    <p class= title_pink>たびの写真館</p>

    <?php
    if (isset($_COOKIE['gz_user'])) {
        print "<p>" . $_COOKIE['gz_user'] . "さんは前回{$_COOKIE['gz_date']}に利用しています";
        $gu = $_COOKIE['gz_user'];
    } else {
        print "<p>はじめてのご来場ありがとうございます</p>";
        $gu = "";
    }
    ?>

    <p>ログオンしてください</p>
    <form action="gz_logon2.php" method="POST">
        <p>ユーザー名</p>
        <input type="text" name="user" size = "30" value="<?php print $gu ?>"><br>
        <p>パスワード</p>
        <input type="password" name="pass" size="30">
        <input type="submit" value="送信">
    </form>
</body>
</html>