<?php
    $id=$_GET['id'];//get علشان الid موجود في اللينك
	$name='';
	$age='';
	$con=new mysqli("Localhost","root","","project");
	$sql="select *from user where 	ID=$id";
	$result=mysqli_query($con,$sql);
	while($res = mysqli_fetch_array($result))
{
   
	
	$Am=$res['FirstName'];
	$ID=$res['LastName'];
	
	
	$rate=$res['Age'];
	
	
	
	$type=$res['Gender'];
	$Instalment=$res['SSN'];
	
	
	$own=$res['Country'];
	$code=$res['City'];
	
	$stat=$res['Email'];
}
?>
<html>
<head>
<style>

body {font-family: Arial, Helvetica, sans-serif;
background-image: url("1221.jpg");
background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
  
}
* {box-sizing: border-box}

.txt22{
  width: 300px;
  margin:5px;
  height:20px;
  padding: 22px;
  margin-left: 10px;
  display: inline-block;
  border: none;
  background:#F8F8FF;
}
.h44{
	margin-left:700px;
	
}
.container {
  padding: 16px;
}

   .s1s1 {
     width: 100%;
  background-color:black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  }
}
</style>
</head>
<body>

 
<form action="ApplyUserEdit.php" method="post">
	<div class="container">
	<table>
		<tr>
			<td> <b class="h44"> FirstName:</b>  </td>
			<td><input class="txt22" type="text" name="FirstName" value="<?php echo $Am;?>"></td>
		</tr>
		<tr>
			<td> <b class="h44">LastName:</b></td>
			<td><input class="txt22" type="text" name="LastName" value="<?php echo $ID;?>"></td>
		</tr>
		
		
		<tr>
			<td> <b class="h44">Age:</b></td>
			<td><input class="txt22" type="text" name="Age" value="<?php echo $rate;?>"></td>
		</tr>
		
		
		
		
		
		<tr>
			<td><b class="h44">Gender:</b></td>
			<td><input class="txt22" type="text" name="Gender" value="<?php echo $type;?>"></td>
		</tr>
		<tr>
			<td><b class="h44">SSN:</b></td>
			<td><input class="txt22" type="text" name="SSN" value="<?php echo $Instalment;?>"></td>
		</tr>
		
		<tr>
			<td><b class="h44">Country:</b></td>
			<td><input class="txt22" type="text" name="Country" value="<?php echo $own;?>"></td>
		</tr>
		<tr>
			<td><b class="h44">City:</b></td>
			<td><input class="txt22" type="text" name="City" value="<?php echo $code;?>"></td>
		</tr>
		
		<tr>
			<td><b class="h44" >Email:</b></td>
			<td><input class="txt22" type="text" name="Email" value="<?php echo $stat;?>"></td>
		</tr>
		
		
		
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
			<td><input class="s1s1" type="submit" name="submit"></td>
		</tr>
	</table>
</form>
</body>
</html>