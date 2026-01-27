<?php
include('Conn.php');
session_start();
if (!isset($_SESSION['userid'])){
header('location:login.php');
}
?>
<html>
	<head>
<title> Welcome to Ahead></title>
</head>
<link rel = "stylesheet"
   type = "text/css"
   href = "Style.css" />
<body bgcolor="#ffff66">
 <div class="header">
	<h2>WELCOME TO AHEAD ENGINEERING PLC. SALES HOME PAGE</h2>
 </div>
 
 <script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="image/hing.jpg"
demo1 = new Image();
demo1.src="image/logo.png"
demo1 = new Image();
demo1.src="image/hand.jpg"
demo2 = new Image();
demo2.src="image/al3.JPG"
demo2 = new Image();
demo2.src="imag/al4.jpg"
demo2 = new Imag();
demo2.src="imag/jj.jpg"
demo2 = new Imag();
demo2.src="imag/hn.jpg"
demo3 = new Image();
demo3.src="imag/ .jpg"
demo4 = new Image();
demo4.src="imag/ .jpg"
demo4 = new Imag();
demo4.src="imag/ .jpg"
demo4 = new Image();
demo4.src="imag/ .jpg"
demo4 = new Image();
demo4.src="imag/ .jpg"
demo4 = new Image();
demo4.src="imag/.jpg"
demo4 = new Image();
demo4.src="imag/ .jpg"
 }
function timeimgs(numb) {  // Reusable timer
thetimer = setTimeout("imgturn('" +numb+ "')", 2000);
}

function imgturn(numb) {   // Reusable image turner
if (document.images) {

if (numb == "4") {         // This will loop the image
document["demo"].src = eval("demo4.src");
timeimgs('1');
}

else {
document["demo"].src = eval("demo" + numb + ".src");

timeimgs(numb = ++numb);
}
}
}

</script>

<title>this page is home page </title>
</head>
<body onLoad="timeimgs('1');" >
<table border=0 >
<tr><td colspan=3>

</td>
</tr>
 <div class="navbar">
 <ul>
 <li><a href="Sales.php" class="active"> Home</a> </li>
  
 <li><a href="">Proforma</a>
 <ul>
    <li><a href="Proforma.php">Register</a></li>
    <li><a href="updateProforma.php">Update</a></li>
    <li><a href="DeleteProforma.php">Delete</a></li>
		<li><a href="Viewproforma.php">View</a></li>
	  </ul></li>
 <li> <a href="" class="active">Delivery</a>
      <ul>   
      <li><a href="StockOut.php">Register</font></a></li> 
     <li><a href="UpdateStockOut.php">Update </font></a></li>
     <li><a href="DeleteStockOut.php">Delete </font></a></li>
     <li><a href="ViewProfileStockOut.php">View </font></a></li>
	    
 </ul></li>
<li><a href="" class="active"> About us</a> </li>
 <li><a href="" class="active">Contact us</a> </li>
<li><a href="" class="active">Help</a></li>
<li><a href="">All Reports</a>
      <ul>   
 
	      <li><a href="BalanceAcc.php">Acceseries</font></a></li>
         <li><a href="BalanceP.php">Profile</font></a></li>
	   </ul></li>	
<li><a href="Logout.php" class="active">Logout</a></li>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<a href="http://www.facebook.com" target="_blank"><img src="image/face.png" height="40px" width="40px" bgcolor="white"></a>
				<a href="http://www.instagram.com" target="_blank"><img src="image/insta.jpg" height="40px" width="40px"></a>
				<a href="http://www.youtube.com" target="_blank"><img src="image/you.png" height="40px" width="40px"></a>
				<a href="http://www.twitter.com" target="_blank"><img src="image/tiwiter.jpg" height="40px" width="40px"></a>
				




				</ul>
 </div>
</td>
</tr>
<td border="0">
<table>
<tr >
<td>
<img src="image/logo.png" width="300" height="400" align='left'>
 </td>
</tr> 
   </table>
</td>

<td bgcolor="white"><h2>
<marquee behavior="right" bgcolor='black' style="color: white;">Welcome To Ahead Engineering Sales Page </marquee></h2></center></font>
<p><table align="center"> 
<tr><td><p style="text-align:justify"> 
 <img src="image/photo.jpg" width="650" height="380" > 
</p> 
</p>
</td>
</tr>
</table>
<td>
<table border=0>
<tr>
<td border="0">
<img src="" height="400" width="300" name="demo" >
</td>
</tr>
<tr>
</td>
</tr>
</table>
<script>
  var myElem = document.createElement("p");
  myElem.innerHTML = "Copyright &copy; " + new Date().getFullYear() + " - All Rights Reserved";
  document.body.appendChild(myElem);
</script>
</body>

</html>

					
 