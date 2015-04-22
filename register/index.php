<?php
$conn=mysql_connect('localhost','root','ab');
	
	if(!$conn)
		{
			echo "connection failed";
		}
		$db = mysql_select_db('php_test',$conn);
		if(!$db)
			echo "could not connect to database";


	
		$name=filter_input(INPUT_POST, 'name');
		$regno=filter_input(INPUT_POST, 'reg');
		$stream=filter_input(INPUT_POST, 'stream');
		$session=filter_input(INPUT_POST, 'session');
		if(!empty($_POST['name']) && !empty($_POST['reg']) && !empty($_POST['stream']) && !empty($_POST['session']))
		{
		$sql = "INSERT INTO user_record (name,regno,stream,session) VALUES('$name','$regno', '$stream', '$session')";
		$result=mysql_query($sql);
		if(!$result){
				echo "your registration unsuccessful try again!";
			}
			else{
				echo "Hello $name your registration no is: $regno and you successfully registered as $stream student of year";
			}
		}
		else{
			echo "try next time!";
		}
	
?>