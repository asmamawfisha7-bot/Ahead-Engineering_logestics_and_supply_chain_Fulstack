<html>
<head>
<link rel = "stylesheet"
   type = "text/css"
   href = "style.css" />
   <div class="header">
<h2>WELCOME TO AHEAD ENGINEERING PLC. </h2>
   </div>
</head>
<div class="login">
<body >
<table border=0 align="center">
<td width="700" bgcolor="white">
<form action="login.php" method="POST" name="login" onsubmit="return checkvalidation()">
<fieldset><legend align="center"> <font face='calibri' size='5px' color="brown">Login Form</font></legend>&nbsp;<br><br>
<center><label id="us">UserName :</label>
<input style="height:30px;width:250px;" id="user" name="username" id="username" required  ><br><br>
<label id="pas">Password :</label>
<input type="password" input style="height:30px;width:250px;"id="password" name="password" required ><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="login" name="login" id="submit">
</center>
</div>
<?php
session_start();
include('Conn.php');
if(isset($_POST["login"]))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$result=mysqli_query($data, "Select * from user where UserName='$username' and Password='$password' and Status=1");
	while ($row=mysqli_fetch_array($result)) {
		$UserName=$row['username'];
		$Password=$row['password'];
       
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			$_SESSION['role']=$row['role'];
			$_SESSION['status']=$status;
			$_SESSION['userid']=$row['userid'];
     if($username!=null&&$_SESSION['role']!=null &&  $password!=null){
	if($row['role']=="store"){
		 	  $_SESSION['userid']=$row['userid'];
			  $_SESSION['role']=$row['role'];
			  header ("location:Store.php");
		}
		if ($row['role']=="sales") {
			  session_start();
		      $_SESSION['userid']=$row['userid'];
			  $_SESSION['role']=$row['role'];
			header ("location:Sales.php");
		}
	}
	
		
}
	
	echo"<font color='black'><h3><p class='right' align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The User is can not Login!</h3></p></font>";

}

?>
</fieldset>
</form>
 </td>
</body>
</html>