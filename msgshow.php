<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Message Board</title></head>
<body>
<h1 align=center>留言板</h1>
<center>
<a href="msgpost.htm" align=center>我要留言</a>
<table border="1" align="center" width=800>
  <tr>
    <th>編號</th>
    <th>留言者</th>
    <th>信箱</th>
    <th>留言日期時間</th>
    <th>留言內容</th>
  </tr>
<?php 
 require("connmysql.php");
  mysql_query("SET NAMES 'utf8'");//設定字元集與連線校對
  $seldb = @mysql_select_db("msgboard");
  if (!$seldb) die("資料庫選擇失敗！");
  $sql_query = "SELECT * FROM `qqq`";
  $result = mysql_query($sql_query);
  $total_records = mysql_num_rows($result);
  while($row_result=mysql_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row_result["編號"]."</td>";
    echo "<td>".$row_result["名稱"]."</td>";
    echo "<td>".$row_result["EMAIL"]."</td>"; //大小寫須與DB同
    echo "<td>".$row_result["留言時間"]."</td>";
    echo "<td>".$row_result["留言內容"]."</td>";
    echo "</tr>";
  }
?>
</table>
<a href="msgpost.htm" align=center>我要留言</a>
</body>
</html>