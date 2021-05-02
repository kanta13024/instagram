<?php
session_start();

$_SESSION = array();
if (isset($_COOKIE["PHPSESSID"])) {
    setcookie("PHPSESSID", '', time() -3600, '/');
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ご利用いただきありがとうございました</title>
</head>
<body>
    <p style= 'color:red'>たび写真館</p>
    <p>またのご利用おまちしております</p>
    <a href="gz_logon.php">再度ログオンする時はここから</a>
    
</body>
</html>