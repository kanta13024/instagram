<?php
session_start();
$u = htmlspecialchars($_POST['myn'], ENT_QUOTES, 'UTF-8');
$b = htmlspecialchars($_POST['myb'], ENT_QUOTES, 'UTF-8');
if (isset($_SESSION['us']) && $_SESSION['us'] != null && $_SESSION['tm'] >= time()-300) {
    $_SESSION['tm'] = time();
var_dump ($u);
echo "<br>";
var_dump ($b);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>いいねを送信しました</title>
</head>
<body style='background-color:lightblue'>
    <?php
    require_once("db_init.php");
    $ps = $db->prepare("INSERT INTO table4 (ban, nam) VALUES (:v_b, :v_n)");
    $ps->bindParam(':v_b', $b);
    $ps->bindParam(':v_n', $u);
    $ps->execute();
    print "<p>" . $u . "さんが「いいね」をしました<br><a href=gz.php>一覧に戻る</a></p>";
} else {
    session_destroy();
    print "<p>ちゃんとログオンしてね<br> <a href='gz_logon.php'>ログオン</a?<p>";
}
    ?>
</body>
</html>