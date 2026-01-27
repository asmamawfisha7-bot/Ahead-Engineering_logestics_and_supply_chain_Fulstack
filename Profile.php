
<?php
include('Conn.php');
session_start();
if (!isset($_SESSION['userid'])){
header('location:login.php');
}
?><html>
	<head>
<title> Welcome to ahead</title>
</head>
<link rel = "stylesheet"
   type = "text/css"
   href = "Style.css" />
   <link rel="stylesheet" href="all.css" media="all" />
    <!-- Served to screens that are at least 20em wide -->
    <link rel="stylesheet" href="small.css" media="(min-width: 20em)" />
    <!-- Served to screens that are at least 64em wide -->
    <link rel="stylesheet" href="medium.css" media="(min-width: 64em)" />
    <!-- Served to screens that are at least 90em wide -->
    <link rel="stylesheet" href="large.css" media="(min-width: 90em)" />
    <!-- Served to screens that are at least 120em wide -->
    <link rel="stylesheet" href="extra-large.css" media="(min-width: 120em)" />
    <!-- Served to print media, like printers -->
    <link rel="stylesheet" href="print.css" media="print" />
<body bgcolor="#ffff66">
 <div class="header">
 <h2>WELCOME TO AHEAD ENGINEERING PLC.</h2>
 </div>
 
 <script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="image/face.png"
demo1 = new Image();
demo1.src="image/insta.jpg"
demo1 = new Image();
demo1.src="image/al2.JPG"
demo2 = new Image();
demo2.src="image/al3.JPG"
demo2 = new Image();
demo2.src="image/al4.jpg"
demo2 = new Image();
demo2.src="image/jj.jpg"
demo2 = new Image();
demo2.src="image/hn.jpg"
demo3 = new Image();
demo3.src="image/kutkut.jpg"
demo4 = new Image();
demo4.src="image/medi.jpg"
demo4 = new Image();
demo4.src="image/nrsha.jpg"
demo4 = new Image();
demo4.src="image/plant.jpg"
demo4 = new Image();
demo4.src="image/fert.jpg"
demo4 = new Image();
demo4.src="image/ersha.jpg"
demo4 = new Image();
demo4.src="image/plant.jpg"
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

<title>this page is home page </title>
</head>

<body onLoad="timeimgs('1');" >
<table border=0 >
<tr><td colspan=3>

</td>
</tr>

<tr>
<td colspan=3> 
 <div class="navbar">
 <ul>
 <li><a href="Store.php" class="active">Home</a> </li>
 <li><a href="MasterP.php" class="active">MasterLists</a> </li>
 <li><a href="Balance.php" class="active">Balance</a></li> 
 <li><a href="StockIn.php" class="active"> Stock In</a> </li>
<li> <a href="Pannel.php" class="active">Pannel</a></li>
<li> <a href="Transfer.php" class="active">Transfer</a></li> 

<li><a href="" class="active">Report</a></li>
   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; 
   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp;
   &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp;  
   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;   
            <a href="http://www.facebook.com" target="_blank"><img src="image/face.png" height="40px" width="40px" bgcolor="white"></a>
				<a href="http://www.instagram.com" target="_blank"><img src="image/insta.jpg" height="40px" width="40px"></a>
				<a href="http://www.youtube.com" target="_blank"><img src="image/you.png" height="40px" width="40px"></a>
				<a href="http://www.twitter.com" target="_blank"><img src="image/tiwiter.jpg" height="40px" width="40px"></a>
            
				


				</ul>
 </div>
 <tr>
<td colspan=3>
<table align="center" id="footer"><tr><td color=#047B5A><font  size="4"> 
    <script>
  var myElem = document.createElement("p");
  myElem.innerHTML = "Copyright &copy; " + new Date().getFullYear() + " - All Rights Reserved";
  document.body.appendChild(myElem);
</script>
</font></td></tr></table>
</td>
</tr>
</table>

</body>

</html>

					
 