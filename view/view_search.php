<?php
require("view_top.php");
$count=count($data['id']);
$is=1;
for($i=0;$i<$count;$i++)
{
/*
if($i%5==4&&$i!=0)
echo '<tr>';
	 echo "<td>";
		$iaddress='<img src="../image/'.$data['iaddress'][$i].'" />';
		echo $iaddress;
		echo $data['title'][$i];
	 echo "</td>";
if($i%5==4&&$i!=0)
echo '<tr/>';
*/
         if($is==1)
		  echo "<tr>";
		 $title=$data['title'][$i];
         $iaddress=$data['iaddress'][$i];
		 $vid=$data['id'][$i];
		 echo "<td>";
		  echo "<a href='show.php?id=$vid ' style='text-decoration:none'><img src=../image/$vid.jpg />$title";
		  echo "&nbsp;";
			echo "</td>";
		  if($is==5)
		  {
		  $is=1;
		  echo "<tr/>";
		  }
		 

}
?>
