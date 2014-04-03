<?php
class database
{
	function DBcon()
	{
		$con= mysql_connect("10.1.71.212","root","123456");
		mysql_select_db("search2",$con);
		}
	}
	
	function DBclose()
	{
		
		}
	
	function DBselectPsw()
	{
		
		
		
		}
?>