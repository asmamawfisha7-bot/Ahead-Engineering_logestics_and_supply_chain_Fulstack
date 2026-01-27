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
<form action="UpdateStockIn.php" method="post" name="update" onsubmit="return checkvalidation()">
<fieldset id=""><legend align="center"> <font face='calibri' size='5px' color="brown">Make Purchased Returned And Transfer In Data</font></legend> <br><br>
<?php
include('Connection.php');

	if (isset($_POST['UpdateStockIn'])) {
		$date=$_POST['date'];
		$gname=$_POST['generalname'];
	    $iname=$_POST['productname'];
		$itype=$_POST['producttype'];
		$unit=$_POST['unit'];
		$withdraw=$_POST['deliveredquantity'];
		$quantity=$_POST['balancequantity'];
		$store=$_POST['store'];
		$update="update balancep set generalname='$gname', productname='$iname',producttype='$itype',unit='$unit',deliveredquantity='$withdraw',balancequantity='$quantity', 
		Quantity='$quantity',store='$store' where productname='$iname' and producttype='$itype'";
		$select="select * from balancep where productname='$iname' and producttype='$itype'";
			
		if($result=mysqli_query($query,$select)){
			$data=mysqli_fetch_array($result);
			 
			$inputname= $data['productname'];
			$inputtype= $data['producttype'];
			$feitchquantity=$data['balancequantity'];
			$withdrawfetch=$data['deliveredquantity'];
        $quantityres=$feitchquantity + $quantity;
        $quantityress=$feitchquantity + $quantity;
			  //$withdrawres=$withdraw + $withdrawfetch; 
				
					
			  $update="update balancep set date='$date', productname='$inputname',producttype='$inputtype',unit='$unit',
			  deliveredquantity='$withdraw', balancequantity='$quantityres', store='$store' where productname='$iname' and producttype='$itype'";
			  if(mysqli_query($query,$update)){
				  $success['success']= true;
				  echo"<script>alert('Update   Successful!!!')</script>";
        }
		}		

	
	mysqli_close($query);
}
include ('Conn.php');
$select_query = "SELECT  * FROM balancep where generalname='profile'"; 
			
			$select_result = mysqli_query($data,$select_query);
			if(mysqli_num_rows($select_result) > 0) {
 
           
			echo "<table id='qq' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>";
			echo"<tr> ";
			echo"<td><font color='black'>Date</font></td>";
			echo"<td><font color='black'>Product &nbsp;Id</font></td>";
			echo"<td><font color='black'>General &nbsp;Name</font></td>";
			echo"<td><font color='black'>Product&nbsp;Name</font></td>";
			echo"<td><font color='black'>product&nbsp;Type</font></td>";
			echo"<td><font color='black'>Unit</font></td>";
			echo"<td><font color='black'>DeliveredQuantity</font></td>";
			echo"<td><font color='black'>BalanceQuantity</font></td>";
			echo"<td><font color='black'>Store</font></td>";
			echo"<td><font color='black'>Action</font></td>";
			echo"</tr>";
  
     while($row = mysqli_fetch_row($select_result)) {
					echo '<tr width:200px;><form action="UpdateStockIn.php" method="post" >';
					echo "<td><input style='width:100px;' value='".$row[0]."' name=date readonly  id=date> </td>";
					echo "<td><input style='width:80px;' value='".$row[1]."' name=productid readonly id=id> </td>";
					echo "<td><input style='width:100px;' value='".$row[2]."' name=generalname  readonly> </td>";
					echo "<td><input style='width:300px;' value='".$row[3]."' name=productname  readonly> </td>";
					echo "<td><input style='width:100px;' value='".$row[4]."' name=producttype readonly pattern='[A-Za-z]{3,15}' title='please fill InputType letter only' > </td>";
					echo "<td><input style='width:100px;' value='".$row[5]."' name=unit  readonly pattern='[0-9]{1,10}' title='please fill Withdraw Number only' > </td>";
					echo "<td><input style='width:120px;' value='".$row[6]."' name=deliveredquantity readonly pattern='[0-9]{1,10}' title='please fill Withdraw Number only' > </td>";
					echo "<td><input style='width:120px;' value='".$row[7]."' name=balancequantity   pattern='[0-9]{1,10}' title='please fill Withdraw Number only' > </td>";
					echo "<td><input style='width:120px;' value='".$row[8]."' name=store readonly pattern='[0-9]{1,10}' title='please fill Withdraw Number only' > </td>";
					 
					echo "<td><input name='UpdateStockIn' type=submit value=update Onclick='return ConfirmUpdate();'> </td></form></tr>";
	              }
				echo "</table>"; 
				 

				}else {
				echo '<p>Input not found!</p>';
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