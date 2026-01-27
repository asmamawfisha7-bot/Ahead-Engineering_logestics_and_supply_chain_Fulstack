<html>
	<head>
<title> Welcome to #######></title>
</head>
<link rel = "stylesheet"
   type = "text/css"
   href = "style.css" />
<body bgcolor="#ffff66">
 <div class="header">
	<h1>@#########</h1>
 </div>
 <hr>
 <ul>
 <li><a href="#" class="active"> Home</a> </li>
 <li><a href="#" class="active">About us</a> </li> 
<li> <a href="#" class="active">Contact us</a></li>  
<li><a href="#" class="active">Feedback</a></li> 
<li><a href="#" class="active">Help</a></li> 			
 </ul>
</div>
<form action="Login.php" method="POST" name="login" onsubmit="return checkvalidation()">
<fieldset><legend align="center"> <font face='calibri' size='5px' color="brown">Login Form</font></legend>&nbsp;<br><br>
<center><label id="us">UserName :</label>
<input style="height:30px;width:250px;" id="user" name="username" id="username" required  ><br><br>
<label id="pas">Password :</label>
<input type="password" input style="height:30px;width:250px;"id="password" name="password" required ><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="login" name="login" id="submit" height="50%" width="100%">
<input type="reset" value="Cancel" name="cancel" id="submit" onClick=" document.location.href='home.php';"/> </center>
</fieldset>
</form>
 </td>
</body>
</html>