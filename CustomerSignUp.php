<?php
$user=$_GET["name"];
$pass=$_GET["pass"];
$servername="localhost";
$username="root";
$password="password";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
	die("Failed");
}
echo "SUCCESS";
echo "<br>";
$sql=mysqli_select_db($conn,"DBMS");
if(!$sql)
{
	die("FAILED");
}
echo "SUCCESS SELECTED DATABASE";
echo '<br>';
//$sql="create table userLogin(email varchar(255),password varchar(255));";
//$check=mysqli_query($conn,$sql);
//if(!$check)
//{
	//die("FAILED");
//}
//echo "SUCCESS CREATED TABLE";
//echo '<br>';
$sql="insert into userLogin values('$user','$pass');";
$check=mysqli_query($conn,$sql);
if(!$check)
{
	die("FAILED".mysqli_error($conn));
}
echo "SUCCESS INSERTED DATA";
echo '<br>';
?>