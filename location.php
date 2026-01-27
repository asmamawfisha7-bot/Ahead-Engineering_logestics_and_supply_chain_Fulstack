 
<html>
	<head>
<title> Welcome to 01121212121></title>
</head>
<link rel = "stylesheet"
   type = "text/css"
   href = "Style.css" />
<body bgcolor="#ffff66">
 <div class="header">
	<h1>Store Registration Form</h1>
 </div>
<script type='text/javascript'>/*
function checkvalidation()
{
			 var eid = document.getElementById('eid');
			  var fname = document.getElementById('fname');
			  var mname = document.getElementById('mname');
			  var lname = document.getElementById('lname');
			  var sex=document.getElementById('sex');
				var age = document.getElementById('age');
				var address = document.getElementById('address');
		 
				var phone = document.getElementById('phone');
			 
				if(lengthRestriction(eid, 1, 10,"for your EmpId")){
				if(isAlphabet( fname, "Please fill your First Name in letters only")){
				 if(lengthRestriction(fname, 3, 30,"for your first name")){
			if(isAlphabet(mname, "please fill your Middle Name in letters only")){  
			if(lengthRestriction(mname, 3, 30,"for your Middle name")){
				if(isAlphabet(lname, "please fill your Last Name in letters only")){  
				if(lengthRestriction(lname, 3, 30,"for your last name")){
					if(madeSelection(sex,"please choose sex")){
						 if(isNumeric(age, "please fill a Age in a number  only")){
				 if(ageRestriction(age)){
				if(lengthRestriction(age,1, 2,"enter valid Age between 18 and 80")){
					
						
					if(isAlphabet(address, "please fill your Address in letters only")){  
					  if(lengthRestriction(address, 3, 30,"for your Address")){
					if(isNumeric(phone, "please enter Number only for Phone number")){
			 
				if(lengthRestriction(phone, 10, 10,"enter valid phone number between 10 and 10")){
			
			 
				
				

 
			 
			 return true;
} }} }} } } }} } } } } } }  
	return false;
	
}
  
  
function isAlphabet(elem, helperMsg)
	{
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}
	else
		{
		alert(helperMsg);
		elem.focus();
		return false;
	}}


function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function notEmpty(elem, helperMsg){
	if(elem.value.length ==0){
		alert(helperMsg);
		elem.focus();
		return false;
		}
		return true;
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9,-,/]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function ageRestriction(elem){
    	if(elem.value<18 ||elem.value>80)
	{
	alert("enter valid age between 18 and 80");
	elem.focus();
	return false;}
	
	else{
  return true;
	}
} 
function madeSelection(elem, helperMsg){
	if(elem.value =="select"){
	alert(helperMsg);
	elem.focus();
		return false;
		}
	else{
		return true;
		
	}
}
 					
</script>*/
</head>
<body>
<form action="location.php " method="POST" name="" onsubmit="return checkvalidation()">
<fieldset><legend align="center" font="white"> <font face='calibri' size='5px' color="brown">Store Registration Form</font></legend>&nbsp;<br><br>
<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label id="">Store Id:</label>
    <input style="height:25px;width:300px;" name="storeid" required id="eid"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
	 
    <label id="" >Store Name:</label>
	   <select input style="height:25px;width:300px;" required id="st" name="storename" >
     <option input style="height:25px;width:300px;" value="">select</option> 
	 <option  value="22">hayahulet</option>
         <option  value="24">24</option>
         <option  value="Goro">Goro</option>
        </select></br></br>
		<label id="">Product Type:</label>
    <select input style="height:25px;width:300px;" required id="producttype" name="producttype" >
    <option input style="height:25px;width:300px;" value="">select</option> 
         <option  value="Profile">Profile</option>
         <option  value="Accesseries">Accesseries</option>
        </select><br><br>
       
        <label id="">Product Name: </label>
       <input style="height:25px;width:300px;" name="productname" required id="quan" ><br><br>
       
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
      <label id="">Initial: </label>
       <input style="height:25px;width:300px;" name="initial" required id="quan" ><br><br>
       
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
		$storeid=$_POST['storeid'];
		$storename=$_POST['storename'];
		$producttype=$_POST['producttype'];
		$productname=$_POST['productname'];
		$initial=$_POST['initial'];
		$res=mysqli_query($data, "INSERT INTO store values('$storeid','$storename','$producttype','$productname','$initial')");
		if(!$res)
	{
	echo"<font color='green'><p class='wrong'>Insertion failed!!!</p></font>";
	}
	else
	{
	echo"<font color='green'><p class='right'>You have Registerd  succefully !!!</p></font>";
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