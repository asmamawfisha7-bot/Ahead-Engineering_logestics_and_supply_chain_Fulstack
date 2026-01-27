<?php
include('Conn.php');
session_start();
if (!isset($_SESSION['userid'])){
header('location:login.php');
}
?>  
<html>
	<head>
<title> Welcome to ></title>
</head>
<link rel = "stylesheet"
   type = "text/css"
   href = "Style.css" />
<body bgcolor="#ffff66">
 <div class="header">
 <tr >
<td><img src="image/logo.PNG" width="200" height="150" align='left'></td>
</tr> 
<h2>WELCOME TO AHEAD ENGINEERING PLC.</h2>
  
<tr>
<td><font color='black'>subcity: Bole</font></td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black' >Woreda:03</font></td>
 
</tr><br>

<tr>
<td><font color='black'>Tel:0953787878 / 0988787878</font></td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black' >H.No.:Addis</font></td>
 
</tr><br>

<tr>
<td><font color='black'>Addres: Around Bole AdeyAbeba Stadium</font></td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black' >TIN: 0030668526</font></td>
 
</tr><br>

 </div>
</head>
<body>

</div>
<tr>
<td>
<table>
<td width="2000" height="400px" bgcolor="white"style="border-radius:15px;border:1px solid #336699;-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
<form action="ViewTransferAc.php" method="post" name="delete" onsubmit="return checkvalidation()">
<fieldset id=""><legend align="center"> <font face='calibri' size='5px' color="brown">View Transfer Accesseries </font></legend> <br><br>
 
<body>

 

<p label: Date id="demo" align=right></p>
<u>
<script>
const d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
</u>
</body>
</html>
<h1 align=center> <u><b>Delivery Note</b></u> </h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ClientName __________________________
&nbsp;&nbsp;&nbsp;
 
<?php
include('Conn.php');
$result = mysqli_query($data, "SELECT date,productid,productname,producttype,unit,quantity,clientname,store FROM stockout");
$d=mysqli_num_rows($result);
$result2 = mysqli_query($data, "SELECT date,productid,productname,producttype,unit,quantity,clientname,store FROM stockout");
$f=mysqli_num_rows($result2);
$result3 = mysqli_query($data, "SELECT date,productid,productname,producttype,unit,quantity,clientname,store FROM stockout");
$m=mysqli_num_rows($result3);
if($d>0)
{
 echo "<table id='' style='width:1000px;  border:1px solid #336699;border-radius:10px;' align='center'><font color=white>";
echo"<tr> ";
echo"<td><font color='black'>Date</font></td>";
echo"<td><font color='black'>ProductId</font></td>";
echo"<td><font color='black'>Product-&nbsp;Name</font></td>";
echo"<td><font color='black'>Product&nbsp;Type</font></td>";
echo"<td><font color='black'>Unit</font></td>";
echo"<td><font color='black'>Quantity</font></td>";
echo"<td><font color='black'>Client Name</font></td>";
echo"<td><font color='black'>Store</font></td>";
echo"</tr>";

while($row = mysqli_fetch_array($result))
  {
                    echo '<tr width:100px;><form action="ViewDeliveryProfile.php " method="post" >';
				            echo "<td><input style='width:150px;' value='".$row[0]."' name=date readonly id=eid> </td>";
					          echo "<td><input style='width:100px;' value='".$row[1]."' name=productid readonly id=eid> </td>";
                    echo "<td><input style='width:300px;' value='".$row[2]."' name=productname readonly id=eid> </td>";
                    echo "<td><input style='width:150px;' value='".$row[3]."' name=producttype readonly id=eid> </td>";
                    echo "<td><input style='width:90px;' value='".$row[4]."' name=unit readonly id=eid> </td>";
					          echo "<td><input style='width:90px;' value='".$row[5]."' name=quantity readonly > </td>";
					          echo "<td><input style='width:100px;' value='".$row[6]."' name=status readonly > </td>";
					          echo "<td><input style='width:100px;' value='".$row[7]."' name=store readonly id=eid> </td>";
					 
	              }
    echo"<tr>";
	echo"</tr> ";
   
	
				echo "</table>"; 
				}
				else {
				echo '<p>Product not found!</p>';
			} 
mysqli_close($data);
 
?>  
</fieldset>
</form>
 </td>
</table>
<form>
  <tr>
   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black'><u>Prepared By</u></font></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
<td><font color='black'><u>Issue By:</u></font></td>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;
<td><font color='black' ><u>Approved By</u></font></td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black'><u>Authorized By</u></font></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black'><u>Received By</u></font></td>
 
</tr><br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black'>Name____________</font></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black'>Name____________</font></td>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black' >Name____________</font></td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black'>Name____________</font></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black'>Name________</font></td>
</tr><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black'>Sign____________</font></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black'>Sign____________</font></td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black' >Sign____________</font></td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
<td><font color='black'>Sign____________</font></td> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><font color='black'>Sign________</font></td><br><br><br><br><br><br><br><br>
 
</tr>
</form>
<center>
<input type="submit" onclick="window.print();" name="print" id="print" height="100px" width="50px" >
<input type="reset" value="Cancel" name="cancel" id="submit" onClick=" document.location.href='Sales.php';"/> 
</center>
    <script>
  var myElem = document.createElement("p");
  myElem.innerHTML = "Copyright &copy; " + new Date().getFullYear() + " - All Rights Reserved";
  document.body.appendChild(myElem);
</script>
</body>
</html> 