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
  background-color: grey;
  color: white;
}
input[type=submit] {
  width: 100%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>
</head>
<body>



<div class="card">
 
 
  
  <p>Delete :</p>
  <div style="margin: 24px 0;">
<?php

if(isset($_POST['search']))
{
	
$valueToSearch = $_POST['valueToSearch'];
$query = "SELECT * FROM `user` WHERE CONCAT 
( (`ID`, `FirstName`, `LastName`, `Age`, `Gender`, `SSN`, `Country`, `City`, `Email`, `TypeUserID`) 
LIKE '%".$valueToSearch."%'";

$search_result = filtertable($query);
}
else{
	$query = "SELECT * FROM `user`";
	$search_result= filtertable($query);
	
	
}

function filtertable($query){
	$con = new mysqli("localhost", "root", "","project");
	$filterresult = mysqli_query($con,$query);
	return $filterresult;
}
?>

<input type="text" name="valueToSearch" placeholder=" Value to search"><br><br>
<input type = "submit" name="search" value="Search"> <br> <br>
<?php
$con = new mysqli("localhost", "root", "","project");
$sql="select * from user";
$result = mysqli_query($con,$sql);	
if(mysqli_num_rows($result) > 0)
{
	echo"<form method='post' action=''>";
	echo"<table>
	<tr bgcolor='#CCCCCC'>
	<td></td>
	<td>FirstName</td>
	<td>LastName</td>
	<td>Age</td>
	
	
	
	<td>Gender</td>
	<td>SSN</td>
	<td>Country</td>
	
	
	
	<td>City</td>
	<td>Email</td>
	<td>TypeUserID</td>
	
	
	</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td><input type='checkbox' name='checkbox[]' id='checkbox[]' value=".$row['ID']."></td>";
		echo "<td>" . $row['FirstName'] . "</td>";
		echo "<td>" . $row['LastName'] . "</td>";
		echo "<td>". $row['Age'] ."</td>";
		
		
		
		echo "<td>" . $row['Gender'] . "</td>";
		echo "<td>" . $row['SSN'] . "</td>";
		echo "<td>". $row['Country'] ."</td>";
		
		
		
		echo "<td>" . $row['City'] . "</td>";
		echo "<td>" . $row['Email'] . "</td>";
		echo "<td>". $row['TypeUserID'] ."</td>";
		
		
		
    }
    echo"<tr>
    <td align='center' bgcolor='#CCCCCC' colspan='10'><input type='submit' name='submit'></td></tr>";
    echo"</table>";
    echo"</form>";
 }
if (isset($_POST['submit']))
	{
		$del=$_POST['checkbox'];
		for($i=0; $i<count($del); $i++)
		{
			$del_id=$del[$i];
			$sql="delete from user where   ID=$del_id";
			mysqli_query($con,$sql);
		}
		
	
	header('Location:DeleteUser.php');
	
	}
	?>
	 <div class="footer">
  <h2></h2>
</div>

</body>
</html>
