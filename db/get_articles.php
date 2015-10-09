<?php
include('dbconnect.php');

mysql_select_db("gymsolut_introscoping",$con);
mysql_query("SET NAMES 'utf8'");
$result=mysql_query("select * from article",$con);

echo "<table border='1'>";
echo "<tr><td align=center><b>Заголовок</b></td><td align=center><b>Анонс</b></td>";
echo "<td align=center><b>Текст</b></td></td>";

while($data = mysql_fetch_row($result))
{
    echo "<tr>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "<td align=center>$data[3]</td>";
    echo "</tr>";
}
echo "</table>";
?>