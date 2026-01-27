<?php
include('Conn.php');
session_start();
if (!isset($_SESSION['userid'])){
header('location:login.php');
}
?>
<html>
	<head>
<title> Welcome to ahead></title>
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
  function ConfirmMaster()
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
 <li><a href="Store.php">Home</a></li> 
 <li><a href="">MasterLists</a>
 <ul>
    <li><a href="MasterAc.php">Register</a></li>
    <li><a href="UpdateMasterAc.php">Update</a></li>
    <li><a href="DeleteMasterAc.php">Delete</a></li>
		<li><a href="ViewMasterAc.php">View</a></li>
	  </ul></li>
<li><a href="">Balance</a>
 <ul>    
  <li><a href="BalanceAc.php">Register</font></a></li> 
  <li><a href="MakeBalanceAc.php">Update </font></a></li>
  <li><a href="DeleteBalanceAc.php">Delete </font></a></li>
  <li><a href="ViewBalanceAc.php">View </font></a></li>
	  </ul></li>	
<li><a href="">Stock In</a>
 <ul>   
 <li><a href="StockInAc.php">Register</font></a></li> 
  <li><a href="UpdateStockInAc.php">Update </font></a></li>
  <li><a href="DeleteStockInAc.php">Delete </font></a></li>
  <li><a href="ViewStockinAc.php">View </font></a></li>
	  </ul></li>	
<li><a href="">Stock Out</a>
      <ul>   
      <li><a href="StockOutAc.php">Register</font></a></li> 
     <li><a href="UpdateStockOutAc.php">Update </font></a></li>
     <li><a href="DeleteStockOutAc.php">Delete </font></a></li>
     <li><a href="ViewStockOutAc.php">View </font></a></li>
	    </ul></li>	
<li><a href="">Transfer</a>
<ul>
     <li><a href="TransferAc.php">Register</font></a></li> 
     <li><a href="UpdateTransferAc.php">Update </font></a></li>
     <li><a href="DeleteTransferAc.php">Delete </font></a></li>
     <li><a href="ViewTransferAc.php">View </font></a></li>

</ul>
</li>
      
<li><a href="">All Reports</a>
      <ul>   
      <li><a href="MonthlyReportAc.php">Report</font></a></li> 
        <li><a href="ViewMasterAc.php">MasterList</font></a></li>
        <li><a href="ViewBalanceAc.php">Balance</font></a></li>
        <li><a href="ViewStore.php">Store</font></a></li>
        <li><a href="">Stock In</font></a>
        <ul>
        <li><a href="ViewStockinAc.php">Stock In</font></a></li>
        <li><a href="PurchasedAc.php">Purchased</font></a></li>
        <li><a href="ReceivedAc.php">Receiving</font></a></li>
        </ul></li>
        <li><a href="">Transfer</font></a>
        <ul>
        <li><a href="ViewTransferAc.php">Transfer</font></a></li>
        <li><a href="TransferInAc.php">Transfer In</font></a></li>
        <li><a href="TransferOutAc.php">Transfer Out</font></a></li>
        </ul></li>
	      <li><a href="ViewDeliveryAc.php">Delivery</font></a></li>
	   </ul></li>	
</div>
<form action="MasterAc.php " method="POST" name="" onsubmit="return checkvalidation()">
<fieldset><legend align="center" font="white"> <font face='calibri' size='5px' color="brown">Accesseries MasterList Registration Form</font></legend>&nbsp;<br><br>
<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label id="">Date:</label>
    <input type="datetime-local" style="height:25px;width:300px;" name="date" required id="did"><br><br>
	&nbsp;&nbsp;&nbsp;
    <label id="">Product Id:</label>
    <input style="height:25px;width:300px;" name="productid" required id="pid"><br><br>
    <label id="" >Product Name:</label>
    <input style="height:25px;width:300px;" name="productname" required id="pname"><br><br>&nbsp;&nbsp;&nbsp;
    <label id="">Product Type:</label>
    <select input style="height:25px;width:300px;" required id="ptype" name="producttype" >
    <option input style="height:25px;width:300px;" value="">select</option> 
         <option  value="Connector">Connector</option>
         <option  value="Arms and Hings">Arms and Hings</option>
         <option  value="Handles and Locks">Handles and Locks</option>
         <option  value="Sliding Accesseries">Sliding Accesseries </option>
         <option  value="Gasket">Gasket</option>
         <option  value="Screw">Screw</option>
         <option  value="Handrail Accesseries">Handrail Accesseries </option>
         <option  value="Double Glazing Accesseries">Double Glazing Accesserie</option>
         <option  value="Silicon Sealants">Silicon Sealants</option>
         <option  value="Screw">Screw</option>
        </select></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label id="">Quantity: </label>
       <input style="height:25px;width:300px;" name="quantity" required id="quan" ><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <label id="">Unit:</label>
       <select input style="height:25px;width:300px;" required id="unit" name="unit" >
    <option input style="height:25px;width:300px;" value="">select</option> 
         <option  value="Pcs">Pcs</option>
         <option  value="Pair">Pair</option>
         <option  value="Sets">Sets</option>
         <option  value="Metres">Metres </option>
         <option  value="Packet">Packet</option>
        </select></br></br>&nbsp;&nbsp;&nbsp;&nbsp; 
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	   <label id="">Store:</label>
	   <select input style="height:25px;width:300px;" required id="st" name="store" >
     <option input style="height:25px;width:300px;" value="">select</option> 
	 <option  value="hayahulet">hayahulet</option>
         <option  value="Hayaarat">24</option>
         <option  value="Goro">Goro</option>
        </select></br></br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
      <input type="submit" value="Register" Onclick='return ConfirmMaster();' name="submit" id="submit" height="100px" width="50px">&nbsp;&nbsp;&nbsp;
     <input type="reset" value="Cancel" name="cancel" id="submit" onClick=" document.location.href='Store.php';"/> </center>
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
		$quantity=$_POST['quantity'];
		$unit=$_POST['unit'];
		$store=$_POST['store'];
		 
		$res=mysqli_query($data, "INSERT INTO masterlist values('$date','$productid','$productname','$producttype','$quantity','$unit','$store')");
		if(!$res)
	{
    echo"<script>alert('Insertion failed!!!')</script>";
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