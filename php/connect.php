<?php
header("Content-type:text/html;charset=utf-8");
mysql_query('SET NAMES UTF8');

//mysql_connect
$conn = mysql_connect("localhost", "root", "940318") or die("connect failed" . mysql_error());
mysql_select_db("db_comicfm", $conn);

//读取表中记录数
$sql = sprintf("select count(*) from %s", "user");
$result = mysql_query($sql, $conn);
if ($result)
{
    $count = mysql_fetch_row($result);
}
else
{
    die("query failed");
}
echo "表中有$count[0] 条记录<br />";

mysql_free_result($result);
mysql_close($conn);
?>