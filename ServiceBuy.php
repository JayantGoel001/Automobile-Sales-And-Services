<?php
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$address=$_POST['add'];
$pno=$_POST['phone'];
$email=$_POST['email'];
$nameofcar=$_POST['nocb'];
$typeOfPart=$_POST['parts'];
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
//$sql="CREATE DATABASE DBMS";
//$check=mysqli_query($conn,$sql);
//if($check)
//{
//echo "DATABASE CREATED";
//}
//else
//{
//die("Failed");
//}
$sql=mysqli_select_db($conn,"DBMS");
if(!$sql)
{
	die("FAILED");
}
echo "SUCCESS SELECTED DATABASE";
echo '<br>';
//$sql="create table Service(fname varchar(255),mname varchar(255),lname varchar(255),address varchar(255),email varchar(30),nameofcb varchar(255));";
//$check=mysqli_query($conn,$sql);
//if(!$check)
//{
	//die("FAILED");
//}
//echo "SUCCESS CREATED TABLE";
//echo '<br>';
$sql="insert into Service values('$fname','$mname','$lname','$address',$pno,'$email','$nameofcar');";
$check=mysqli_query($conn,$sql);
if(!$check)
{
	die("FAILED".mysqli_error($conn));
}
echo "SUCCESS INSERTED DATA";
echo '<br>';
//$sql="create table storeRoom(nameofcb varchar(255),quantity integer(10) default 20,type integer(1));";
//$check=mysqli_query($conn,$sql);
//if(!$check)
//{
//	die("FAILED".mysqli_error($conn));
//}
//echo "SUCCESS CREATED TABLE";
//echo '<br>';
$sql="update storeRoom set quantity=quantity-1 where nameofcb='$typeOfPart' and type=0;";
$check=mysqli_query($conn,$sql);
if(!$check)
{
	die("FAILED".mysqli_error($conn));
}
echo "SUCCESS UPDATED DATA";
echo '<br>';
mysqli_close($conn);
?>