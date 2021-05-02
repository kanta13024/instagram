<?php
session_start();
$b = $_GET['tran_b'];
if (isset($_SESSION['us']) && $_SESSION['us'] != null && $_SESSION['tm'] >= time()-300) {
    $_SESSION['tm'] = time();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>いいねを送信します</title>
</head>
<body style='background-color:khaki'>
<p><?php print $b; ?>番の投稿に<u>いいね</u>といいました</p>
<p>名前を入力してください</p>
<form action="gz_iine_set.php" method="POST">
    <p>名前</p>
    <input type="text" name="myn" value="<?php print $_SESSION['us']; ?>"><br>
    <input type="hidden" name="myb" value="<?php print $b; ?>">
    <input type="submit" value="送信">
</form>
    
</body>
</html>