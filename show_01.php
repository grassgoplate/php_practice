<?php 
  header("Content-Type: text/html; charset=utf-8");
  $db_host = "localhost";
  $db_username = "root";
  $db_password = "usbw";
  $db_link = @mysql_connect($db_host, $db_username, $db_password);
  if (!$db_link) die("連結資料庫失敗！"); //如連結失敗,則顯示錯誤並結束
  mysql_query("SET NAMES 'utf8'"); //設定字元集與連線校對
  $seldb = @mysql_select_db("msgboard");
  if (!$seldb) die("選擇資料庫失敗！"); //如果開啟失敗,則顯示錯誤並結束
  $sql_query = "SELECT * FROM `qqq`"; //設sql查詢資料語句
  $result = mysql_query($sql_query); //執行查詢,結果置於變數中
  $total_records = mysql_num_rows($result); //將查得筆數置於變數中
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<h1 align="center">留言板</h1>
<p align="center">目前留言筆數：<?php echo $total_records;?>
<table border="1" align="center">
  <tr>
    <th>編號</th>
    <th>留言者</th>
    <th>信箱</th>
    <th>留言日期時間</th>
    <th>留言內容</th>
  </tr>
<?php
    //將查得的n筆留言逐筆印出
  while($row_result=mysql_fetch_assoc($result)){ //將逐筆置入變數,直到做完
    echo "<tr>";
    echo "<td>".$row_result["編號"]."</td>"; //將變數中的每個欄位印出
    echo "<td>".$row_result["名稱"]."</td>";
    echo "<td>".$row_result["EMAIL"]."</td>";
    echo "<td>".$row_result["留言時間"]."</td>";
    echo "<td>".$row_result["留言內容"]."</td>";
    echo "</tr>";
  }
?>
</table>
</body>
</html>