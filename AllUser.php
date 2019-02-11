<?php
$con = new mysqli("localhost", "root", "","project");
$sql="select * from user";
$result = mysqli_query($con,$sql);	//كانه 2dimensions array
if(mysqli_num_rows($result) > 0)//لو عندي data ولا لا
{
	echo"<table>
	<tr bgcolor='#CCCCCC'>
	<td>ID</td>
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
	while($row = mysqli_fetch_array($result))//علي كل سطر
	{
		echo "<tr>
	<td>".$row['ID']."</td> 
	<td>".$row['FirstName']."</td>
	<td>".$row['LastName']."</td> 
	<td>".$row['Age']."</td>
	<td>".$row['Gender']."</td> 
	<td>".$row['SSN']."</td>
	<td>".$row['Country']."</td> 
	
	
	
	<td>".$row['City']."</td> 
	<td>".$row['Email']."</td>
	<td>".$row['TypeUserID']."</td> 
	
	</tr>";
    }
    echo"</table>";
}
?>