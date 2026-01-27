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
    function ConfirmDelete()
    {
      var x = confirm("Are you sure want to Delete?");
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
</tr> 
<tr>
<td>
<table>
<!---<tr ><img src="image/nrsha.jpg" width="320" height="450" align='left'>
 </td>
</tr>
    </table>
</td>-->
<td width="2000" height="400px" bgcolor="white"style="border-radius:15px;border:1px solid #336699;-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
<form action="DeleteStockInAc.php" method="post" name="delete" onsubmit="return checkvalidation()">
<fieldset id=""><legend align="center"> <font face='calibri' size='5px' color="brown">Deleting Accesseries Page</font></legend> <br><br>
<?php 
include ('Conn.php');
     $select_query = "select * from stockin where generalname='Accesseries' order by date DESC"; 
         if (isset($_POST['DeleteStockInAc'])) {
	          $productid=$_POST['productid'];
		        $delete_query = "delete from stockin where unit='pcs' and  productid = '$productid'";
             if(mysqli_query($data,$delete_query)) {
	            echo"<script>alert('Delete Succesfull!!!')</script>";
        }
		 }
			        $select_result = mysqli_query($data, $select_query);
			        if(mysqli_num_rows($select_result) > 0) {
 
         
    echo "<table id='qq' style='width:1000px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>";
echo"<td><font color='black'>Date</font></td>";
echo"<td><font color='black'>ProductId</font></td>";
echo"<td><font color='black'>General-&nbsp;Name</font></td>";
echo"<td><font color='black'>Product-&nbsp;Name</font></td>";
echo"<td><font color='black'>Product&nbsp;Type</font></td>";
echo"<td><font color='black'>Unit</font></td>";
echo"<td><font color='black'>Quantity</font></td>";
echo"<td><font color='black'>Status</font></td>";
echo"<td><font color='black'>store</font></td>";
		echo"</tr>";
      
			
     while($row = mysqli_fetch_row($select_result)) {
        echo '<tr width:200px;><form action="DeleteStockInAc.php" method="post" >';
        echo "<td><input style='width:90px;' value='".$row[0]."' name=date readonly id=did> </td>";
        echo "<td><input style='width:90px;' value='".$row[1]."' name=productid readonly id=pid> </td>";
        echo "<td><input style='width:100px;' value='".$row[2]."' name=generalname readonly id=pid> </td>";
        echo "<td><input style='width:300px;' value='".$row[3]."' name=productname readonly > </td>";
        echo "<td><input style='width:150px;' value='".$row[4]."' name=producttype readonly > </td>";
        echo "<td><input style='width:100px;' value='".$row[5]."' name=unit readonly > </td>";
        echo "<td><input style='width:100px;' value='".$row[6]."' name=quantity readonly> </td>";
        echo "<td><input style='width:170px;' value='".$row[7]."' name=status readonly> </td>";
        echo "<td><input style='width:90px;' value='".$row[8]."' name=store readonly id=st> </td>";
		echo "<td><input type=submit name='DeleteStockInAc' value='Delete' Onclick='return ConfirmDelete();'> </td></form></tr>";
	              }
			
				echo '</table>'; 
			

				}else {
                    echo"<script>alert('Data not Found!!!')</script>";
			}
			 
			 
		
?>
<script class="footer">
  var myElem = document.createElement("p");
  myElem.innerHTML = "Copyright &copy; " + new Date().getFullYear() + " - All Rights Reserved";
  document.body.appendChild(myElem);
</script>
</body>
</html>