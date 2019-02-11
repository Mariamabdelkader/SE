
<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 1100px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

.footer {
  padding: 10px;
  text-align: center;
  background: #ddd;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;

}
tr {

  background-color:grey;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: black;
  color: white;
}
</style>
</head>
<body>


<div class="card">
  
  
  <div style="margin: 24px 0;">

<?php
$con = new mysqli("localhost", "root", "","project");
$sql="select * from user";
$result = mysqli_query($con,$sql);	
if(mysqli_num_rows($result) > 0)
{
	echo"<table>
	<tr bgcolor='#CCCCCC'>
	<td>FirstName</td>
	<td>LastName</td>
	
	<td>Age</td>
	
	
	<td>Gender</td>
	<td>SSN</td>
	
	<td>Country</td>
	<td>City</td>
	
	<td>Email</td>

	
	<td>Edit</td>
	</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
	echo"<td>".$row['FirstName']."</td>";
	echo"<td>".$row['LastName']."</td>";
	
	echo"<td>".$row['Age']."</td>";

	
	echo"<td>".$row['Gender']."</td>";
	echo"<td>".$row['SSN']."</td>";
	
	echo"<td>".$row['Country']."</td>";
	echo"<td>".$row['City']."</td>";
	
	echo"<td>".$row['Email']."</td>";
	
	echo"<td><a href='EditUser1.php?id=".$row['ID']."'>Edit</a></td>";
	echo"</tr>";
    }
    echo"</table>";
 }
?>
<div class="footer">
  <h2></h2>
</div>

</body>
</html>
