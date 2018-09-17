<?php
	$Name = "Aftab Khalil";//htmlspecialchars($_GET["Name"]) ;
	$Password = "Aftab Khalil";//htmlspecialchars($_GET["Password"]) ;

	
	session_start();
			
	$con = mysqli_connect('localhost','root','');
	
	if(!$con)
	{
		echo("Not Connected to server");
	}
	
	if(!mysqli_select_db($con,'first'))
	{
		echo "Not Connected";
	}

	//echo $Name;
	//echo $Password;


	$sql = "SELECT Message FROM table_two WHERE UserId = '".$Name."' and Password = '".$Password."'";

	$result = mysqli_query($con , $sql);
	
	
	if($result)
	{
		 if(mysqli_num_rows($result) > 0 )
		 {
			while($row = mysqli_fetch_assoc($result))
			{
				echo $row["Message"];
			}
		 }
		 else
		 {
			 echo "Zero Rows";
		 }
	}
	else
	{
		echo " No Result";
	}
	
	
	
?>