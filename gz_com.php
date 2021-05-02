<?php
session_start();
$u = $_GET['sn'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コメントをどうぞ！</title>
</head>
<body style="background-color:lightblue">
<?php
if (isset($_SESSION['us']) && $_SESSION['us'] != null && $_SESSION['tm'] >= time()-300 ){
    $_SESSION['tm'] = time();
?>
<p><?php echo $u; ?>番の画像に対するコメントをどうぞ！</p>

<form action="gz_com_set.php" method="POST">
    <p>名前</p><br>
    <input type="text" name="myn" value="<?php echo $_SESSION['us']; ?>">
    <p>コメント</p><br>
    <textarea name="myc" cols=70" rows="10"></textarea><br>
    <input type="hidden" name="myb" value="<?php print $u; ?>">
    <input type="submit" value="送信">
</form>

<p><a href="gz.php">一覧に戻る</a></p>
<?php 
} else {
    session_destroy();
    print "<p>ちゃんとログオンしてね<br>
    <a href='gz_logon.php'>ログオン</a></p>";
}
?>
    
</body>
</html>