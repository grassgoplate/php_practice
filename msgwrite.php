<?php 
  $id=$_POST["id"]; //接收資料
  $E_MAIL=$_POST["EMAIL"]; //接收資料
  $msg=$_POST["msg"]; //接收資料
  
  require("connmysql.php");
  mysql_query("SET NAMES 'utf8'"); //設定字元集與連線校對
  $seldb = @mysql_select_db("msgboard");
  if (!$seldb) die("開啟資料庫失敗！"); //如果開啟失敗,則顯示錯誤並結束
  $today=date("Y.m.d H:i:s"); //設定日期格式,以供存入資料表的留言時間
  $sql_query = "insert into `qqq` (`名稱`,`EMAIL`,`留言時間`,`留言內容`) values (";
  $sql_query .= "'".$id."',"; 
  $sql_query .= "'".$E_MAIL."',"; 
  $sql_query .= "'". $today ."',"; 
  $sql_query .= "'".$msg."')";
  //echo $sql_query;
  //exit();
  mysql_query($sql_query);  //執行sql,寫入表中
  header("Location:msgshow.php"); //將控制權導回到主程式首頁頁面
?>