<?php
class search
{
	function searchvideo()
	{
	$keyword=$_GET['keyword'];
	//echo $keyword;
	$keyword="%".$keyword."%";$i=0;
	$con= mysql_connect("10.1.71.212","root","123456");
	mysql_query("SET NAMES 'GB2312'");
	mysql_select_db("search2",$con);
	$result = mysql_query("SELECT * FROM video WHERE title LIKE '$keyword' 
		                        UNION SELECT * FROM video WHERE attribute1 LIKE '$keyword' 
		                        UNION SELECT * FROM video WHERE attribute2 LIKE '$keyword'
		                        UNION SELECT * FROM video WHERE attribute3 LIKE '$keyword' ");
	while($row = mysql_fetch_array($result))
		{
		  $data['attribute1'][$i] = $row['attribute1'];
		  $data['id'][$i] = $row['id'];
		  $data['iaddress'][$i] = $row['iaddress'];
		  $data['vaddress2'][$i] = $row['vaddress2'];
		  $data['title'][$i] = $row['title'];
		  $i++;					
	    }
	mysql_close($con);
	
	require("../view/view_search.php");
	}


	
}
?>