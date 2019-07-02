<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Message Board</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<center>
<div class=box2>
<h1 align=center>留言板</h1>
</div>
<div class=box1>
<br>
<a href="msgpost.htm" align=center>我要留言</a>
<table border="1" align="center" width=800>
  <tr class="bg1">
    <th width=40>編號</th>
    <th width=120>留言者</th>
    <th>信箱</th>
    <th>留言日期時間</th>
    <th>留言內容</th>
  </tr>
<?php 
  //require("connmysql.php");//連結與開啟資料庫
	include "connmysql.php";
  $sql_query = "SELECT * FROM `qqq`";
  $result = mysql_query($sql_query);
  $total_records = mysql_num_rows($result);
  $n=1;
  while($row_result=mysql_fetch_assoc($result)){
    if($n % 2==1){
	  echo "<tr bgcolor=#C9FFFF>";
	}else{
      echo "<tr bgcolor=#F7FFCE>";
    }
	$n++;
    echo "<td>".$row_result["編號"]."</td>";
    echo "<td>".$row_result["名稱"]."</td>";
    echo "<td>".$row_result["EMAIL"]."</td>"; //大小寫須與DB同
    echo "<td>".$row_result["留言時間"]."</td>";
    echo "<td>".$row_result["留言內容"]."</td>";
    echo "</tr>";
  }
?>
</table>
<br>
</div>
<!--
<a href="msgpost.htm" align=center>我要留言</a>-->
</body>
</html>
