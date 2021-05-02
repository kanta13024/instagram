<?php
session_start();

$u = htmlspecialchars($_POST['user'], ENT_QUOTES, "UTF-8");
$p = htmlspecialchars($_POST['pass'], ENT_QUOTES, "UTF-8");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ようこそ！たび写真館へ</title>
</head>
<body>
  <?php
  require_once("db_init.php");   //データベースへの接続
  $ps = $db->query("SELECT pas FROM table2 WHERE id = '$u'");

  if ($ps->rowCount()>0) {
    $r = $ps->fetch();
    if ($r['pas'] === md5($p)) {
      $_SESSION['us'] = $u;
      $_SESSION['tm'] = time();
      if ($u === "admin") {
        print "管理者のページへどうぞ<br> <a href='gz_admin.php'>管理者のページ</a>";
      } else {
        print "<p>一般ユーザー" .$u . "さん<br>ようこそたび写真館へ <a href='gz.php'>ここをクリックして一覧表示をどうぞ</a>";
      }
    } else {
      session_destroy();
      print "<p>登録されていないかパスワードが違います<br> <a href='gz_logon.php'>ログオン</a></p>";
    }
  } else {
    session_destroy();
    print "<p>登録されていないかパスワードが違います<br><a href='gz_logon.php'>ログオン</a></p>";
  }
  ?>
  
</body>
</html>