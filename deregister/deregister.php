<?php
$conn=mysql_connect('localhost','root','ab');
if(!$conn)
{
	echo"connection failed";
}
$sql=mysql_select_db('php_test',$conn);
if(!$sql)
{
	echo"could not connect to database";
}
if(!empty($_POST['regno']))
{
	$regno=filter_input(INPUT_POST, 'regno');
	$sql = "DELETE FROM user_record WHERE regno = '{$regno}'";

	$result=mysql_query($sql);
		if(!$result)
		{
			echo"this  is invalid registration no:!";
		}
		else
		{
			echo"your registration no: $regno has been removed successfully from our database";
		}
}
?>

