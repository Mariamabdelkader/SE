<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: white;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}
</style>

<?php
$con = new mysqli("localhost", "root", "","project");
if(isset($_POST['submit']))
{
	
	$firstname=$_POST['FirstName'];
	$lastname=$_POST['LastName'];
	
	$Add=$_POST['Age'];
	$gend=$_POST['Gender'];
		$SN=$_POST['SSN'];
		$Coun=$_POST['Country'];
	$City=$_POST['City'];
	
	
	

	
	
	$Email=$_POST['Email'];
	
	
	$result="insert into user
	(FirstName,LastName,Age,Gender,SSN,Country,City,Email,TypeUserID)
	values
	('$firstname','$lastname','$Add','$gend','$SN','$Coun','$City','$Email','1')";
	
	

	
	mysqli_query($con,$result);
}
?>	
