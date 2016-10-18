<?php
    include('db_login.php');
	$cn=mysql_connect($db_host,$db_username,$db_password);
	if(!$cn)
	{
	 die("could not connect".mysql_error())."<br>";
	}
	$db=mysql_select_db($db_database);
	if(!$db)
	{
	 die("could not connect".mysql_error())."<br>";
	}
	$query="INSERT INTO postform_tbl values ('$_POST[name]','$_POST[age]') ";
	$rs=mysql_query($query);
	if(!$rs)
	{
	 die("could not query the database".mysql_error())."<br>";
	}
	echo "1 record added";
	
 
	mysql_close($cn)
?>
<html>
<body>
<br>
Welcome <?php echo $_POST["name"]; ?><br>
Your age is: <?php echo $_POST["age"]; ?>

</body>
</html>


