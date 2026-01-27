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
	<h2>WELCOME TO AHEAD ENGINEERING PLC.</h2>
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
 <li><a href="Sales.php">Home</a></li> 
 <li><a href="">Proforma</a>
 <ul>
    <li><a href="Proforma.php">Register</a></li>
    <li><a href="updateProforma.php">Update</a></li>
    <li><a href="DeleteProforma.php">Delete</a></li>
		<li><a href="Viewproforma.php">View</a></li>
	  </ul></li>
 
<li><a href="">Stock Out</a>
      <ul>   
      <li><a href="StockOut.php">Register</font></a></li> 
     <li><a href="UpdateStockOut.php">Update </font></a></li>
     <li><a href="DeleteStockOut.php">Delete </font></a></li>
     <li><a href="ViewProfileStockOut.php">View </font></a></li>
	    </ul></li>	
<li><a href="">Contact Us</a></li>
<li><a href="">About Us</a></li>
<li><a href="">All Reports</a>
      <ul>   
 
	      <li><a href="BalanceAcc.php">Acceseries</font></a></li>
         <li><a href="BalanceP.php">Profile</font></a></li>
	   </ul></li>	
      <li><a href="Logout.php">Logout</a></li>
       
</div>
<form action="StockOut.php " method="POST" name="" onsubmit="return checkvalidation()">
<fieldset><legend align="center" font="white"> <font face='calibri' size='5px' color="brown">Delivery Registration Form </font></legend>&nbsp;<br><br>
<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <label id="">Date:</label>
 <input type="datetime-local" style="height:25px;width:300px;" name="date" required id="did"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <label id="">Product Id:</label>
    <input style="height:25px;width:300px;" name="productid" required id="pid"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
    <label id="" >Product Name:</label>
    <input style="height:25px;width:300px;" name="productname" required id="pname"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label id="">Product Type:</label>
    <select input style="height:25px;width:300px;" required id="ptype" name="producttype" >
    <option input style="height:25px;width:300px;" value="">select</option> 
         <option  value="Black Anodized">Black Anodized</option>
         <option  value="Black Coated">Black Coated</option>
         <option  value="Siliver Anodized">Siliver Anodized</option>
         <option  value="Siliver Coated">Siliver Coated</option>
         <option  value="Ivory">Ivory</option>
         <option  value="Copper">Copper</option>
        </select></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label id="">Unit:</label>
       <input style="height:25px;width:300px;" name="unit" required id="unit" ><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <label id="">Quantity: </label>
       <input style="height:25px;width:300px;" name="quantity" required id="quan" ><br><br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label id="">Client: </label>
       <input style="height:25px;width:300px;" name="clientname" required id="cname" ><br><br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <label id="">Store:</label>
	   <select input style="height:25px;width:300px;" required id="st" name="store" >
     <option input style="height:25px;width:300px;" value="">select</option> 
	 <option  value="hayahulet">hayahulet</option>
         <option  value="Hayaarat">24</option>
         <option  value="Goro">Goro</option>
        </select></br></br></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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