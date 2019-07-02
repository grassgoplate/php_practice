<?php
header("Content-Type: text/html; charset=utf-8");
  $db_host = "localhost";
  $db_username = "root";
  $db_password = "usbw";
  $db_link = @mysql_connect($db_host, $db_username, $db_password);
  if (!$db_link) die("資料庫連結失敗！"); //如果連結失敗,則顯示錯誤並結束
  ?>