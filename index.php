<?php
session_start();
if (isset($_SESSION["userName"]))
  $sUserName = $_SESSION["userName"];
else
  $sUserName = "Guest";

if ($sUserName == "Guest") {
  $_SESSION["LoginStatus"] = "登入";
  $_SESSION["getLoginStatus"] = "";
} else {
  $_SESSION["LoginStatus"] = "登出";
  $_SESSION["getLoginStatus"] = "?logout=1";
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Lab - index</title>
</head>

<body>

  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td align="center" bgcolor="#CCCCCC">
        <font color="#FFFFFF">會員系統 - 首頁</font>
      </td>
    </tr>
    <tr>
      <td align="center" valign="baseline">
        <a href="login.php<?= $_SESSION["getLoginStatus"] ?>"><?= $_SESSION["LoginStatus"] ?></a>
        | <a href="secret.php">會員專用頁</a>
      </td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><?= "Welcome! " . $sUserName ?> </td>
    </tr>
  </table>


</body>

</html>