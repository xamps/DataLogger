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
if (isset ($_POST['regno']));
{
        $searchq = $_POST['regno'];
    $query = mysql_query("SELECT * FROM user_record WHERE regno LIKE '%$searchq%'" );
    $count = mysql_num_rows($query);
    if($count == 0){
        echo'There was no search results !';
        }
        else{
        while($row = mysql_fetch_array($query,$sql))
{
    echo "EMP ID :{$row['name']}  <br> ".
         "EMP NAME : {$row['stream']} <br> ".
         "EMP SALARY : {$row['session']} <br> ".
         "--------------------------------<br>";
} 
}
}

?>