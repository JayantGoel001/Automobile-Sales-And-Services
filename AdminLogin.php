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
//echo "SUCCESS";
//echo "<br>";
$sql=mysqli_select_db($conn,"DBMS");
if(!$sql)
{
	die("FAILED");
}
//echo "SUCCESS SELECTED DATABASE";
//echo '<br>';
//$sql="create table adminLogin (email varchar(255),password varchar(255));";
//$check=mysqli_query($conn,$sql);
//if(!$check)
//{
	//die("FAILED");
//}
//echo "SUCCESS CREATED TABLE";
//echo '<br>';
//$sql="insert into adminLogin values('jgoel92@gmail.com','123456');";
//$check=mysqli_query($conn,$sql);
//if(!$check)
//{
	//die("FAILED".mysqli_error($conn));
//}
//echo "SUCCESS INSERTED DATA";
//echo '<br>';
//$username="jgoel92@gmail";
$sql="Select * from adminLogin where email='$user' and password='$pass';";
$check=mysqli_query($conn,$sql);
$x=0;
while($row=mysqli_fetch_array($check))
{
	$x=$x+1;
}
//echo $x;
if($x!=0)
{
	//echo " SUCCESS in ADMIN LOGIN";
}
else
{
	die ("FAILED in ADMIN LOGIN");
}
echo "<h1 align='center'>Store Room</h1>";
echo "<style> table,th,td{border:1px solid black;} body {
    -webkit-animation: colorchange 15s infinite; 
    animation: colorchange 15s infinite;
}
@-webkit-keyframes colorchange {
     0%  {background: RED;}
    25%  {background: Green;}
    50%  {background: Yellow;}
    75%  {background: Cyan;}
    100% {background: Blue;}
}
@keyframes colorchange {
     0%  {background: Red;}
    25%  {background: Green;}
    50%  {background: Yellow;}
    75%  {background: Cyan;}
    100% {background: Blue;}
}  </style>";
echo "<table style='width:100%'>";
$sql="Select * from storeRoom;";
$check=mysqli_query($conn,$sql);
echo "<tr><th>Name Of Car,bike And Their Parts</th><th>Quantity</th><th>Type</th></tr><br>";
while($row=mysqli_fetch_array($check))
{
	echo "<tr><td>{$row['nameofcb']}</td><td>{$row['quantity']}</td><td>{$row['type']}</td></tr>";
}
echo "</table>";

echo "<h1 align='center'>Customer</h1>";
echo "<style> table,th,td{border:1px solid black;}   </style>";
echo "<table style='width:100%'>";
$sql="Select * from customer;";
$check=mysqli_query($conn,$sql);
echo "<tr><th>first name</th><th>middle name</th><th>last name</th><th>address</th><th>phoneNo</th><th>email</th><th>price</th><th>name Of Car And Bike Purchased</th></tr><br>";
while($row=mysqli_fetch_array($check))
{
	echo "<tr><td>{$row['fname']}</td><td>{$row['mname']}</td><td>{$row['lname']}</td><td>{$row['address']}</td><td>{$row['phoneNo']}</td><td>{$row['email']}</td><td>{$row['price']}</td><td>{$row['nameofcb']}</td></tr>";
}
echo "</table>";

echo "<h1 align='center'>Service</h1>";
echo "<style> table,th,td{border:1px solid black;}   </style>";
echo "<table style='width:100%'>";
$sql="Select * from service;";
$check=mysqli_query($conn,$sql);
echo "<tr><th>first name</th><th>middle name</th><th>last name</th><th>address</th><th>phoneNo</th><th>email</th><th>name Of Car And Bike Purchased</th></tr><br>";
while($row=mysqli_fetch_array($check))
{
	echo "<tr><td>{$row['fname']}</td><td>{$row['mname']}</td><td>{$row['lname']}</td><td>{$row['address']}</td><td>{$row['phoneNo']}</td><td>{$row['email']}</td><td>{$row['nameOfCB']}</td></tr>";
}
echo "</table>";

echo "<h1 align='center'>ADMIN</h1>";
echo "<style> table,th,td{border:1px solid black;}   </style>";
echo "<table style='width:50%'>";
$sql="Select * from adminLogin;";
$check=mysqli_query($conn,$sql);
echo "<tr><th>Email</th><tr><br>";
while($row=mysqli_fetch_array($check))
{
	echo "<tr><td>{$row['email']}</td></tr>";
}
echo "</table>";
echo "<br> Wants to add another ADMIN:<br>";
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<style>

input[type=text],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #48d1cc;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}


.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #4682b4;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

.modal {
   display: none;
   position: fixed;
   z-index: 1;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgb(0,0,0);
   background-color: rgba(0,0,0,0.4);
   padding-top: 60px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%;
}

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}


.animate {
 -webkit-animation: animatezoom 0.6s;
 animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
 from {-webkit-transform: scale(0)}
 to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}


@media screen and(max-width: 300px){
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> Admin SignUp
</button>

<div id="id01" class="modal">
<form class="modal-content animate" action="AdminSignUp.php" method="get">
<div class="imgcontainer">
<span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">
    &times;
</span>

 <img src="avatar.jpg"
 alt="Avatar"
 class="avatar">
    </div>


 <div class="container">
  <label><b>Username</b></label>
  <input type="text" placeholder="Enter Username"   name="name" required>
<label><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="pass" required>
<button type="submit" >SignUp</button>
<input type="checkbox" checked="checked">Remember me
</div>


 <div class="container" style="background-color:#f1f1f1">
 <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
 Cancel</button>
 <span class="psw">Forgot
 <a href="#">password?

 </a></span>
  </div>
  </form>
</div>

<script>
var modal = document.getElementById('id01');
outside of the modal, close it 

window.onclick = function(event) {
    if (event.target == modal) {
     modal.style.display = "none";
    }
}
</script>
</body>
</html>