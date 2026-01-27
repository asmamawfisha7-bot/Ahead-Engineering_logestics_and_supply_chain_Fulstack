<?php
include('Conn.php');
session_start();
if (!isset($_SESSION['userid'])){
header('location:login.php');
}
?>
<html>
	<head>
<title> Welcome to 01121212121></title>
</head>
<link rel = "stylesheet"
   type = "text/css"
   href = "Style.css" />
   <href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<body bgcolor="#ffff66">
 <div class="header">
	<h1>Delivery Registration Form</h1>
 </div>
</head>
<script>
    function ConfirmStockout()
    {
      var x = confirm("Do You Want to Register?");
      if (x)
          return true;
      else
        return false;
    }
</script>
<body>
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

<li><a href="Logout.php" class="active">Logout</a></li>  
</div>
<form action="Proforma.php " method="POST" name="" onsubmit="return checkvalidation()">
<fieldset><legend align="center" font="white"> <font face='calibri' size='5px' color="brown">proforma Preparation Form </font></legend>&nbsp;<br><br>
<center>
 
       <input type="submit" value="Submit" Onclick='return ConfirmStockout();' name="submit" id="submit" height="100px" width="50px">&nbsp;&nbsp;&nbsp;
     <input type="reset" value="Cancel" name="cancel" id="submit" onClick=" document.location.href='Sales.php';"/> </center>
    </center>
</fieldset>
</form>
 </td>
 <?php
	include('Conn.php');
	if(isset($_POST['submit']))
{

	    $date=$_POST['date'];
	   $productid=$_POST['productid'];
		$productname=$_POST['productname'];
		$producttype=$_POST['producttype'];
		$unit=$_POST['unit'];
		$quantity=$_POST['quantity'];
		$clientname=$_POST['clientname'];
		$store=$_POST['store'];
		$res=mysqli_query($data, "INSERT INTO stockout values('$date','$productid','$productname','$producttype','$unit',
		'$quantity','$clientname','$store')");
		if(!$res)
	{
    echo"<script>alert('Register Failled!!!')</script>";
   }
 
	
	else
	{
    echo"<script>alert('Register Succesfull!!!')</script>";
	}

}							
mysqli_close($data);
?>



    <script class="footer">
  var myElem = document.createElement("p");
  myElem.innerHTML = "Copyright &copy; " + new Date().getFullYear() + " - All Rights Reserved";
  document.body.appendChild(myElem);
</script>
</body>
</html> 