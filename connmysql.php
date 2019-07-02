<?php
header("Content-Type: text/html; charset=utf-8");
  $db_host = "localhost";
  $db_username = "root";
  $db_password = "usbw";
  $db_link = @mysql_connect($db_host, $db_username, $db_password);
  if (!$db_link) die("資料庫連結失敗！"); //如果連結失敗,則顯示錯誤並結束
 mysql_query("SET NAMES 'utf8'"); //設定字元集與連線校對
  $seldb = @mysql_select_db("msgboard");
  if (!$seldb) die("開啟資料庫失敗！"); //如果開啟失敗,則顯示錯誤並結束
  ?>
