<?php
class login
{
	function checkpsw()
	{
		
		$username=$_POST['user']
		if($_POST['user']==''||$_POST['psw']=='')
		echo "username or password con't be empty! ";
		else
		{
		$con= mysql_connect("10.1.71.212","root","123456");
		mysql_select_db("search2",$con);
		$result = mysql_query("SELECT uid,password FROM user WHERE username = '$username' ");
		while($row = mysql_fetch_array($result))
		  {
                  $getpassword=$row['password'];
		  }
		
		if($getpassword==$_POST['psw'])
			{
			echo "succeed";
			//·¢·Åsession
			}
		else
                     echo "username or password is wrong! try again!";
		}
              
	}
}
?>