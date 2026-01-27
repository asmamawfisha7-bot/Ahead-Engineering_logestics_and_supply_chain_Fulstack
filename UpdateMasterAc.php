<?php
include('Conn.php');
session_start();
if (!isset($_SESSION['userid'])){
header('location:login.php');
}
?>
<html>
	<head>
<title> Welcome to ahead</title>
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
    function ConfirmUpdate()
    {
      var x = confirm("Do You Want to Update?");
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
</div>
</tr> 
<tr>
<td>
<table>
<!---<tr ><img src="image/nrsha.jpg" width="320" height="450" align='left'>
 </td>
</tr>
    </table>
</td>-->
<td width="1500" height="400px" bgcolor="white"style="border-radius:15px;border:1px solid #336699;-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
<form action="UpdateMasterAc.php" method="post" name="update" onsubmit="return checkvalidation()">
<fieldset id=""><legend align="center"> <font face='calibri' size='5px' color="brown">Accesseries Masterlist Modification</font></legend> <br><br>
<?php 
include ('Conn.php');
if (isset($_POST['UpdateMasterAc'])) {
	
	  $date=$_POST['date'];
		$productid=$_POST['productid'];
		$productname=$_POST['productname'];
		$producttype=$_POST['producttype'];
		$quantity=$_POST['quantity'];
		$unit=$_POST['unit'];
		$price=$_POST['price'];
		$store=$_POST['store'];
      $update_query = "update masterlist set date = '$date',
														productname = '$productname',
														producttype = '$producttype',
														quantity = '$quantity',
														unit = '$unit',
														price = '$price',
														store = '$store'
														 where  productid ='$productid'";
				
				if(mysqli_query($data, $update_query)) {
					echo"<script>alert('Update Succesfull!!!')</script>";
				}
				else {
					die(mysqli_error($data));
				}
}
$select_query = "SELECT  * FROM masterlist where unit='pcs'"; 
			
			$select_result = mysqli_query($data, $select_query);
			if(mysqli_num_rows($select_result) > 0) {
 
           
echo "<table id='qq' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>";
echo"<tr> ";
echo"<td><font color='red'>Date</font></td>";
echo"<td><font color='red'>Product Id</font></td>";
echo"<td><font color='red'>Product Name</font></td>";
echo"<td><font color='red'>Product Type</font></td>";
echo"<td><font color='red'>Quantity</font></td>";
echo"<td><font color='red'>Unit</font></td>";
echo"<td><font color='red'>Price</font></td>";
echo"<td><font color='red'>Store</font></td>";
echo"<td><font color='red'>Action</font></td>";
echo"</tr>";
     while($row = mysqli_fetch_row($select_result)) {
					echo '<tr width:200px;><form action="UpdateMasterAc.php" method="post" >';
					echo "<td><input style='width:100px;' value='".$row[0]."' name='date' readonly></td>";
					echo "<td><input style='width:150px;' value='".$row[1]."' name='productid' > </td>";
					echo "<td><input style='width:150px;' value='".$row[2]."' name='productname' > </td>";
					echo "<td><input style='width:150px;' value='".$row[3]."' name='producttype'> </td>";
					echo "<td><input style='width:150px;' value='".$row[4]."' name='quantity' readonly > </td>";
					echo "<td><input style='width:150px;' value='".$row[5]."' name='unit' id='age' > </td>";
					echo "<td><input style='width:150px;' value='".$row[6]."' name='price' > </td>";
					echo "<td><input style='width:150px;' value='".$row[7]."' name='store' > </td>";
					echo "<td><input name='UpdateMasterAc' type=submit value='update' Onclick='return ConfirmUpdate();'> </td></form></tr>";
	              }
				echo "</table>"; 
				 

				}else {
          echo"<script>alert('Product not Found!!!')</script>";
			}
		 

	?>
</fieldset>
</form>
</td>
<script class="footer">
  var myElem = document.createElement("p");
  myElem.innerHTML = "Copyright &copy; " + new Date().getFullYear() + " - All Rights Reserved";
  document.body.appendChild(myElem);
</script>
</body>
</html>