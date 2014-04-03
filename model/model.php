<?php
class model
{
function DBcon()
{
	$i=0;
$con= mysql_connect("10.1.71.212","root","123456");
mysql_select_db("search2",$con);
$result= mysql_query("SELECT * FROM video");
while($row = mysql_fetch_array($result))
{
	$data['vid'][$i]=$row['id'];
	$i++;
	}
	require('/view/view.php');
	}
	}
?>