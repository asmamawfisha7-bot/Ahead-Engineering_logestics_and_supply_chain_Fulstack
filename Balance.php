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
    function ConfirmBalance()
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
    <li><a href="MasterP.php">Register</a></li>
    <li><a href="UpdateMaster.php">Update</a></li>
    <li><a href="DeleteMaster.php">Delete</a></li>
		<li><a href="ViewMasterProfile.php">View</a></li>
	  </ul></li>
<li><a href="">Balance</a>
 <ul>    
  <li><a href="Balance.php">Register</font></a></li> 
  <li><a href="MakeBalance.php">Update </font></a></li>
  <li><a href="DeleteBalance.php">Delete </font></a></li>
  <li><a href="ViewBalanceProfile.php">View </font></a></li>
	  </ul></li>	
<li><a href="">Stock In</a>
 <ul>   
  <li><a href="StockIn.php">Register</font></a></li> 
  <li><a href="UpdateStockIn.php">Update </font></a></li>
  <li><a href="DeleteStockIn.php">Delete </font></a></li>
  <li><a href="ViewProfileStockin.php">View </font></a></li>
	  </ul></li>	
    <li><a href="">Pannel</a>
      <ul>   
      <li><a href="pannel.php">Register</font></a></li> 
     <li><a href="Updatepannel.php">Update </font></a></li>
     <li><a href="DeletePannel.php">Delete </font></a></li>
     <li><a href="ViewPannel.php">View </font></a></li>
	    </ul></li>	
<li><a href="Transfer.php">Transfer</a>
<ul>
     <li><a href="Transfer.php">Register</font></a></li> 
     <li><a href="UpdateTransfer.php">Update </font></a></li>
     <li><a href="DeleteTransfer.php">Delete </font></a></li>
     <li><a href="ViewTransferProfile.php">View </font></a></li>

</ul>
</li>
<li><a href="">All Reports</a>
      <ul>   
      <li><a href="MonthlyReport.php">Report</font></a></li> 
        <li><a href="ViewMasterProfile.php">MasterList</font></a></li>
        <li><a href="ViewBalanceProfile.php">Balance</font></a></li>
        <li><a href="ViewStore.php">Store</font></a></li>
        <li><a href="">Stock In</font></a>
        <ul>
        <li><a href="ViewProfileStockin.php">Stock In</font></a></li>
        <li><a href="Purchased.php">Purchased</font></a></li>
        <li><a href="Received.php">Receiving</font></a></li>
        </ul></li>
        <li><a href="">Transfer</font></a>
        <ul>
        <li><a href="ViewTransferProfile.php">Transfer</font></a></li>
        <li><a href="TransferIn.php">Transfer In</font></a></li>
        <li><a href="TransferOut.php">Transfer Out</font></a></li>
        </ul></li>
	      <li><a href="ViewDeliveryProfile.php">Delivery</font></a></li>
	   </ul></li>	
</div><tr>
<td>
<table>
<td width="2000" height="400px" bgcolor="white"style="border-radius:15px;border:1px solid #336699;-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
<form action="Balance.php" method="post" name="delete" onsubmit="return checkvalidation()">
<fieldset id=""><legend align="center"> <font face='calibri' size='5px' color="brown">Balance Registration Form  </font></legend> <br><br>
<center>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	<label id="">Date:</label>
    <input type="date" style="height:25px;width:300px;" name="date" required id="did"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
    <label id="">Product Id:</label>
    <input style="height:25px;width:300px;" name="productid" required id="pid">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<button>Search</button><br><br>&nbsp;
	&nbsp;
  <label >General Name:</label>
  <select input style="height:25px;width:300px;" required id="gname" name="generalname" >
    <option input style="height:25px;width:300px;" value="" name="generalname">select</option> 
	    <option  value="Profile">Profile</option>
      </select></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label id="" >Product Name:</label>
    <input style="height:25px;width:300px;" name="productname" required id="pname"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label id="">Product Type:</label>
    <select input style="height:25px;width:300px;" required id="ptype" name="producttype" >
    <option input style="height:25px;width:300px;" value="">select</option> 
	    <option  value="Bronze">Bronze</option>
         <option  value="Black Coated">Black Coated</option>
         <option  value="Black Anodized">Black Anodized</option>
         <option  value="Siliver coated">Siliver coated</option>
         <option  value="Siliver Anodized">Siliver Anodized </option>
         <option  value="Ivory">Ivory</option>
        </select></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;<label id="" >Unit:</label>
    <input style="height:25px;width:300px;" name="unit" required id="unit"><br><br>
  
       <label id="">Delivered Quantity: </label>
       <input style="height:25px;width:300px;" name="deliveredquantity" required id="dquantity" ><br><br>
       &nbsp;&nbsp;
       <label id="">Balance Quantity: </label>
       <input style="height:25px;width:300px;" name="balancequantity" required id="bquantity" ><br><br>
      
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	   <label id="">Store:</label>
	   <select input style="height:25px;width:300px;" required id="st" name="store" >
     <option input style="height:25px;width:300px;" value="">select</option> 
	 <option  value="hayahulet">hayahulet</option>
         <option  value="Hayaarat">24</option>
         <option  value="Goro">Goro</option>
        </select></br></br></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
       <input type="submit" value="Submit" name="submit" Onclick='return ConfirmBalance();' id="submit" height="100px" width="50px">&nbsp;&nbsp;&nbsp;
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
    $generalname=$_POST['generalname'];
		$productname=$_POST['productname'];
		$producttype=$_POST['producttype'];
		$unit=$_POST['unit'];
		$deliverdquantity=$_POST['deliveredquantity'];
		$balancequantity=$_POST['balancequantity'];
		$store=$_POST['store'];
		$res=mysqli_query($data, "INSERT INTO balancep values('$date','$productid','$generalname','$productname','$producttype','$unit',
		'','$balancequantity','$store')");
		if(!$res)
	{
	echo"<script>alert('FAIL TO REGISTER')</script>";
  }
	else
	{
	echo"<script>alert('SUCCESSFUL TO REGISTER')</script>"; 
	}

						
mysqli_close($data);
}
 
      ?>
<div class="footer">


	 
    <script class="footer">
  var myElem = document.createElement("p");
  myElem.innerHTML = "Copyright &copy; " + new Date().getFullYear() + " - All Rights Reserved";
  document.body.appendChild(myElem);
</script>
</div>
</body>
</html> 