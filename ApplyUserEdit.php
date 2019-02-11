 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="container">
                  
  

</div>
<?php
$con = new mysqli("localhost", "root", "","project");
if(isset($_POST['submit']))
{
	$ID=$_POST['id'];
	$Am=$_POST['FirstName'];
	$ID1=$_POST['LastName'];
	
	
	$rate=$_POST['Age'];
	$type=$_POST['Gender'];
	$Instalment=$_POST['SSN'];
	$code=$_POST['Country'];
	$stat=$_POST['City'];
	
	$cod=$_POST['Email'];
	
	
	
	
	
	$result="update user set 
	FirstName='$Am',
	LastName='$ID1',
	
	
	Age='$rate',
	
	Gender='$type',
	
	SSN='$Instalment',
	
	
	
	Country='$code',
	City='$stat',
	Email='$cod'
	
	
	where 	ID=$ID";
	
	
	
	mysqli_query($con,$result);
	
}
?>