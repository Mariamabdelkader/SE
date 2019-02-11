

<html>
<head>

<style>
body {
 background-image: url("");
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
	height:900px;
}
.container {
  padding: 16px;
}

.text74
{
 width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.ssss{
width: 100%;
  background-color:#191970;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.div54{
  background-color: #f2f2f2;
  padding: 20px;
  width:550px;
  height:840px;
  position:absolute;
  margin-left:800px;
  margin-top:0px;
}

</style>
<body>

<form action="AddUserApply.php" method="post">

	<table>
	
		<tr>
			<td>Fist Name:</td>
			<td><input class="text74" type="text" name="FirstName">
		</td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td><input class="text74" type="text" name="LastName"></td>
		</tr>
		
		
		<tr>
			<td>Age:</td>
			<td><input class="text74" type="text" name="Age"></td>
		</tr>
		
		<td>Gender:</td>
			<td><select class="text74" name="Gender">
  <option value="Select">Select</option>
  <option value="Female">Female</option>
  <option value="Male">Male</option>
 
</select></td>
		</tr>
		<tr>
			<td>SSN</td>
			<td><input class="text74" type="text" name="SSN"></td>
		</tr>
		
		<td>Country:</td>
			<td>	<select class="text74" name="Country">
  <option value="Select">Select</option>
  <option value="Afghanistan">Afghanistan</option>
  <option value="Albania">Albania</option>
  <option value="Bahrain">Bahrain</option>
  
   <option value="Belarus">Belarus</option>
  <option value="Canada">Canada</option>
  <option value="China">China</option>
  
  
   <option value="Dominica">Dominica</option>
  <option value="Denmark">Denmark</option>
  <option value="Egypt">Egypt</option>
</select>
</td>
		</tr>
		
		
		<tr>
			<td>City:</td>
			<td><select class="text74" name="City">
  <option value="Select">Select</option>
  <option value="Africa">Africa</option>
  <option value="Asia">Asia</option>
  <option value="Central America">Central America</option>
  
  
  <option value=" Europe"> Europe</option>
  <option value="North America">North America</option>
  <option value=" Oceania"> Oceania</option>
  
  
  <option value=" South America"> South America</option>
  <option value="North America">Cairo</option>
  
</select></td>
		</tr>
		
		
		<tr>
			
		
		
		
		
		
		
		
		
		
		
		
		
		<tr>
			<td>Email:</td>
			<td><input class="text74" type="mail" name="Email"></td>
		</tr>
		
		
		
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>
</body>
</html>