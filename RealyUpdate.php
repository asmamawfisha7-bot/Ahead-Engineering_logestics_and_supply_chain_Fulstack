 
<html>
	<head>
<title> Welcome to 01121212121></title>
</head>
<link rel = "stylesheet"
   type = "text/css"
   href = "Style.css" />
<body bgcolor="#ffff66">
 <div class="header">
	<h1>Balance Preparation Form</h1>
 </div>
</head>
<body>
<div class="navbar">
 <ul>
 <li><a href="Store.php">Home</a></li> 
<li><a href="MasterP.php">MasterLists</a>
 <ul>
		<li><a href="ViewMasterProfile.php">View</a></li>
	  </ul></li>
<li><a href="">Balance</a>
 <ul>    <li><a href="Balance.php">Balance</font></a></li> 
 <li><a href="MakeBalance.php">Update </font></a></li>
	    <li><a href="ViewBalanceProfile.php">View </font></a></li>
	  </ul></li>	
<li><a href="">Stock In</a>
 <ul>   
        <li><a href="StockIn.php">Submition </font></a></li> 
	    <li><a href="ViewProfileStockin.php">View </font></a></li>
	  </ul></li>	
<li><a href="">Stock Out</a>
      <ul>   
      <li><a href="StockOut.php">Deliver</font></a></li> 
	    <li><a href="ViewDelivery.php">View </font></a></li>
	    </ul></li>	
<li><a href="Transfer.php">Transfer</a></li>
      
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
        <li><a href="ViewTransferProfile.php">Transfer In</font></a></li>
        <li><a href="ViewTransferProfile.php">Transfer Out</font></a></li>
        </ul></li>
	      <li><a href="ViewDeliveryProfile.php">Delivery</font></a></li>
	   </ul></li>	
</div>
<form action="balance.php " method="POST" name="" onsubmit="return checkvalidation()">
<fieldset><legend align="center" font="white"> <font face='calibri' size='5px' color="brown">Profiles Balance Sheet Form</font></legend>&nbsp;<br><br>
<center>
   &nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<label id="">Date:</label>
    <input type="datetime-local" style="height:25px;width:300px;" name="date" required id="did"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label id="">Product Id:</label>
    <input style="height:25px;width:300px;" name="productid" required id="eid"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;
    <label id="" >Product Name:</label>
    <input style="height:25px;width:300px;" name="productname" required id="fname"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label id="">Product Type:</label>
    <select input style="height:25px;width:300px;" required id="producttype" name="producttype" >
    <option input style="height:25px;width:300px;" value="">select</option> 
	    <option  value="Bronze">Bronze</option>
         <option  value="Black Coated">Black Coated</option>
         <option  value="Black Anodized">Black Anodized</option>
         <option  value="Siliver coated">Siliver coated</option>
         <option  value="Siliver Anodized">Siliver Anodized </option>
         <option  value="Ivory">Ivory</option>
        </select></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;<label id="" >Unit:</label>
    <input style="height:25px;width:300px;" name="unit" required id="fname"><br><br>
 <label id="">Received Quantity: </label>
       <input style="height:25px;width:300px;" name="receivedquantity" required id="quan" ><br><br>
       <label id="">Delivered Quantity: </label>
       <input style="height:25px;width:300px;" name="deliveredquantity" required id="quan" ><br><br>
       &nbsp;&nbsp;
       <label id="">Balance Quantity: </label>
       <input style="height:25px;width:300px;" name="balancequantity" required id="quan" ><br><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
       
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
       <input type="submit" value="Submit" name="submit" id="submit" height="100px" width="50px">&nbsp;&nbsp;&nbsp;
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
  $unit = $_POST['unit'];
  $result=mysqli_query($data, "SELECT * FROM masterlist WHERE productid='$productid'");
if(mysqli_num_rows($result)<1) {
        echo "<script>alert('update  is notfound ,please enter ssn correctly!');
           window.location.href='update.html';</script>";
    exit();
        }
  echo"<br><br>"; 
      if($result){
     $resul = mysqli_query($data, "update balancep SET productname='$productname',producttype='$producttype',
    unit='$unit',receivedquantity='$receivedquantity',deliveredquantity='$deliveredquantity',balancequantity='$balancequantity',
    store='$store' WHERE productid='$productid' ");
  echo"<script>alert('update is successfully');</script>";
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