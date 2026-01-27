<html>
<head>
<meta name="description"content="Php Code for Search Record" />
<meta http-equiv="Content-Type" content="text/html;
charset=iso-8859-1" />
<title>Search Recorded Product</title>
</head>
<body>
<center>
<h1><u>Search Product</u></h1>
</center>
<form name="search" method="post" action="search.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"align="center" border="0">
<tr><td colspan="6" style="background:#0066FF; color:#FFFFFF; font-size:20px">Search</td></tr>
<tr><td>Enter Searched Id</td><td>
<input type="text" name="search" size="40" /></td>
<td><input type="submit" value="Search" /></td></tr>
<tr bgcolor="#666666" style="color:#FFFFFF">
<td>Product Name</td><td>Product Type </td><td>Unit</td><td>Delivered Quantity</td><td>Balance Quantity</td><td>Store</td></tr>
<?php
 include('Conn.php');
if(isset($_POST['Search']))
{
$productid=$_POST['productid'];
$query="select * from balancep where  productid='$productid'";
$result=mysqli_query($data,$query);
while ($row = mysqli_fetch_array($result)) {
} 
echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>"; 
}
?>
<tr><td colspan="3">&nbsp;</td></tr>
</tr>
</table>
</form>
</body>
</html>