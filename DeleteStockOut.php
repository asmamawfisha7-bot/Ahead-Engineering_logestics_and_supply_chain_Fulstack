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
 
	      <li><a href="ViewDeliveryProfile.php">Delivery</font></a></li>
	   </ul></li>	
      <li><a href="Logout.php">Logout</a></li>
</div>
</div>
</tr> 
<tr>
<td>
<table>
<td width="2000" height="400px" bgcolor="white"style="border-radius:15px;border:1px solid #336699;-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
<form action="DeleteStockOut.php" method="post" name="delete" onsubmit="return checkvalidation()">
<fieldset id=""><legend align="center"> <font face='calibri' size='5px' color="brown">Deleting Page</font></legend> <br><br>
<?php 
include ('Conn.php');
     $select_query = "select * from stockout order by date DESC"; 
         if (isset($_POST['DeleteStockOut'])) {
	          $productid=$_POST['productid'];
		        $delete_query = "delete from stockout where productid = '$productid'";
             if(mysqli_query($data,$delete_query)) {
	            echo '<p style="color:green">Delete  success!</p>';
        }
		 }
			        $select_result = mysqli_query($data, $select_query);
			        if(mysqli_num_rows($select_result) > 0) {
 
         
    echo "<table id='qq' style='width:1000px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>";
		echo"<td><font color='red'>Date</font></td>";
		echo"<td><font color='red'>Product Id</font></td>";
		echo"<td><font color='red'>Product Name</font></td>";
		echo"<td><font color='red'>Product Type</font></td>";
		echo"<td><font color='red'>Unit</font></td>";
        echo"<td><font color='red'>Quantity</font></td>";
		echo"<td><font color='red'>Client Name</font></td>";
		echo"<td><font color='red'>Store</font></td>";
		echo"<td><font color='red'>Action</font></td>";
		echo"</tr>";
      
			
     while($row = mysqli_fetch_row($select_result)) {
        echo '<tr width:200px;><form action="DeleteStockOut.php" method="post" >';
        echo "<td><input style='width:100px;' value='".$row[0]."' name='date' ></td>";
        echo "<td><input style='width:150px;' value='".$row[1]."' name='productid' > </td>";
        echo "<td><input style='width:150px;' value='".$row[2]."' name='productname' > </td>";
        echo "<td><input style='width:150px;' value='".$row[3]."' name='producttype'> </td>";
        echo "<td><input style='width:150px;' value='".$row[4]."' name='unit'  > </td>";
        echo "<td><input style='width:150px;' value='".$row[5]."' name='quantity' id='age' > </td>";
        echo "<td><input style='width:100px;' value='".$row[6]."' name='clientname' > </td>";
        echo "<td><input style='width:100px;' value='".$row[7]."' name='store' > </td>";
					echo "<td><input type=submit name='DeleteStockOut' value='Delete' Onclick='return ConfirmDelete();'> </td></form></tr>";
	              }
			
				echo '</table>'; 
			

				}else {
				echo '<p>Product not found!</p>';
			}
			 
			 
		
?>