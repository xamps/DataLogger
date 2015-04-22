<?php

$conn=mysql_connect('localhost','root','ab');
	
	if(!$conn)
		{
			echo "connection failed:".mysql_connect_error();
		}
		$db = mysql_select_db('php_test',$conn);
		if(!$db)
			echo "could not connect to database";

if(!empty($_POST['username'])&&!empty($_POST['pwd']))
{
$username=filter_input(INPUT_POST, 'username');
$pwd=filter_input(INPUT_POST, 'pwd');

$query="SELECT * FROM user_login WHERE username ='$username' AND pwd='$pwd'";
$result=mysql_query($query);
$row=mysql_num_rows($result);

if($row == 1){
	//header("location:".$_SERVER['./login_page/index.php']);
	echo "matched";
	header("location: ../login_page/login_page.php");
}else{
	echo "username Password does not match";
} 
}
?>