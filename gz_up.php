<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>たび画像アップロード</title>
</head>

<body style='background-color:lightblue'>
    <?php
    if (isset($_SESSION['us']) && $_SESSION['us'] != null && $_SESSION['tm'] >= time() - 300) {
        $_SESSION['tm'] = time();
    
    ?>
    <p style="color:deeppink;font-size:300%">たび写真館</p>
    <p>投稿よろしくお願いいたします</p>

    <form enctype="multipart/form-data" action="gz_up_set.php" method="POST">
        <p>名前</p><br>
        <input type="text" name="myn" value="<?php echo $_SESSION['us'] ?>">
        <p>メッセージ</p><br>
        <textarea name="mym" cols="70" rows="10"></textarea><br>
        <input type="file" name="myf">
        <p>送信できるのは1MBまでのJPEG画像だけです<br>
        また展開後のメモリ消費が多い場合はアップロードできません<br>
        <input type="submit" value="送信"><br>
        <a href="gz.php">一覧表示へ</a>
        </p>
    </form>
    <?php
    } else {
        session_destroy();
        print "<p>ちゃんとログオンしてね<br><a href='gz_logon.php'>ログオン</a></p>";
    }
    ?>
</body>

</html>