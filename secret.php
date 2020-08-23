<?php
session_start();
if ($_SESSION["userName"] == "Guest") {
  $_SESSION["lastPage"] = "secret.php";
  header("Location: login.php");
  exit();
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Lag - Member Page</title>
</head>

<body>

  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td align="center" bgcolor="#CCCCCC">
        <font color="#FFFFFF">會員系統 － 會員專用</font>
      </td>
    </tr>
    <tr>
      <td align="center" valign="baseline">你好，<?= $_SESSION["userName"] ?></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><a href="index.php">回首頁</a></td>
    </tr>
  </table>


</body>

</html>