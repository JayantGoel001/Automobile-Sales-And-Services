<?php
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$address=$_POST['add'];
$pno=$_POST['phone'];
$email=$_POST['email'];
//$price=$_POST['price'];
$nameofcar=$_POST['nocb'];
if($nameofcar=="Ferrari Portofino")
{
	$price=40900000;
}
else if($nameofcar=="BMW Z4")
{
	$price=7683000;
}
else if($nameofcar=="Lamborghini Aventador")
{
	$price=56500000;
}
else if($nameofcar=="MG Hector")
{
	$price=1218000;
}
else if($nameofcar=="Jaguar XJ")
{
	$price=13100000;
}
else if($nameofcar=="Royal Enfield Classic 500")
{
	$price=202000;
}
else if($nameofcar=="BMW R 1250 RT")
{
	$price=1800000;
}
else if($nameofcar=="Harley Davidson Fat Boy")
{
	$price=1819000;
}
else if($nameofcar=="Honda CB650R")
{
	$price=750000;
}
else if($nameofcar=="TVS Apache RR 310")
{
	$price=227000;
}
else
{
	$price=0;
}
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
//$sql="create table customer(fname varchar(255),mname varchar(255),lname varchar(255),address varchar(255),phoneNo integer(10),email varchar(30),price float,nameofcb varchar(255));";
//$check=mysqli_query($conn,$sql);
//if(!$check)
//{
//	die("FAILED");
//}
//echo "SUCCESS CREATED TABLE";
//echo '<br>';
$sql="insert into customer values('$fname','$mname','$lname','$address',$pno,'$email','$price','$nameofcar');";
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
$sql="update storeRoom set quantity=quantity-1 where nameofcb='$nameofcar' and type=1;";
$check=mysqli_query($conn,$sql);
if(!$check)
{
	die("FAILED".mysqli_error($conn));
}
echo "SUCCESS UPDATED DATA";
echo '<br>';


mysqli_close($conn);
?>