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
 
<td width="1500" height="400px" bgcolor="white"style="border-radius:15px;border:1px solid #336699;-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
<form action="UpdateStockOut.php" method="post" name="update" onsubmit="return checkvalidation()">
<fieldset id=""><legend align="center"> <font face='calibri' size='5px' color="brown">StockOut Modification</font></legend> <br><br>
<?php 
include ('Conn.php');
if (isset($_POST['UpdateStockOut'])) {
	
	    $date=$_POST['date'];
		$productid=$_POST['productid'];
		$productname=$_POST['productname'];
		$producttype=$_POST['producttype'];
		$quantity=$_POST['unit'];
		$unit=$_POST['quantity'];
		$clientname=$_POST['clientname'];
		$store=$_POST['store'];
      $update_query = "update stockout set date = '$date',
                                                       productname = '$productname',
														producttype = '$producttype',
														quantity = '$quantity',
														unit = '$unit',
														clientname = '$clientname',
														store = '$store'
														 where  productid ='$productid'";
				
				if(mysqli_query($data, $update_query)) {
					echo"<script>alert('Update Succesfull!!!')</script>";
				}
				else {
					die(mysqli_error($data));
				}
}
$select_query = "SELECT  * FROM stockout"; 
			
			$select_result = mysqli_query($data, $select_query);
			if(mysqli_num_rows($select_result) > 0) {
 
           
                echo "<table id='qq' style='width:600px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>";
                echo"<tr> ";
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
                                    echo '<tr width:200px;><form action="UpdateStockOut.php" method="post" >';
                                    echo "<td><input style='width:100px;' value='".$row[0]."' name='date' > </td>";
                                    echo "<td><input style='width:150px;' value='".$row[1]."' name='productid' > </td>";
                                    echo "<td><input style='width:150px;' value='".$row[2]."' name='productname' > </td>";
                                    echo "<td><input style='width:150px;' value='".$row[3]."' name='producttype'> </td>";
                                    echo "<td><input style='width:150px;' value='".$row[4]."' name='quantity'  > </td>";
                                    echo "<td><input style='width:150px;' value='".$row[5]."' name='unit' id='age' > </td>";
                                    echo "<td><input style='width:100px;' value='".$row[6]."' name='clientname' > </td>";
                                    echo "<td><input style='width:100px;' value='".$row[7]."' name='store' > </td>";
                                    echo "<td><input name='UpdateStockOut' type=submit value='update' Onclick='return ConfirmUpdate();'> </td></form></tr>";
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