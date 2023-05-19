<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
	<style>
		body{
			background-color: silver;
			
		}
		form{
			width: 700px;
			height: 800px;
			background-color:white;
			opacity: 0.7;
      border-radius:  20px 20px 20px 20px ;
      margin-left: 150px;
      box-shadow: 10px 20px 20px ;
		}
		h1{
			padding-top: 20px;
		}
		input{
			width: 650px;
			
			margin-bottom: 20px;
	background-color: white;
	border-radius: 10px;

	padding-left: 20px;
	padding-bottom: 10px;
		}
		button{
			border: none;
			border-radius: 0px;
			background-color: black;
			color: white;
			margin-left: 250px;
			width:130px;
			height:50px;
		}
		button:hover{
			background-color: darkgreen;
		}
		label{
			padding-left: 10px;
		}
.address label{
	padding: 35px;
}

	</style>
</head>
<body>
<form method="post" action="processor.php">
	<h1 align="center">Creat Account</h1>
	<table>
		<tr><td><label>First Name</label></td></tr>
			<tr><td><input type="text" name="firstname" placeholder="Enter your First Name"></td></tr>
      <tr><td><label>Last Name</label></td></tr>
      <tr><td><input type="text" name="lastname" placeholder="Enter your Last Name"></td></tr>
      <tr><td><label>User Name</label></td></tr>
      <tr><td><input type="text" name="username" placeholder="Enter your User Name"></td></tr>
			<tr><td><label>Birth Date</label></td></tr>
			<tr><td><input name="birhday" type="date"></td></tr>
			<tr><td><label >Address</label></td></tr>

			<tr><td>***************************************************************************************</td></tr>
<div class="address">
			<tr>
  <td>
    <label>KfleKetema</label>
    <select name="kifleketema" id="kifleketema">
  	 
          	<option value="Kolfe_Keranyo">
          	Kolfe Keranyo
          </option>
            	<option value="akaki_Kaliti">
          	Akaki Kaliti
          </option>
            	<option value="bole">
          	Bole
          </option>
          	<option value="yeka">
          	Yeka	
          </option>
          <option value="Nifas_Silk">
          	Nifas silk	
          </option>
            	<option value="Gulele">
          	Gulele
          </option>
            	<option value="Lemi_Kura">
          	Lemi Kura
          </option>
  	
    </select>
</td>
</tr>

<tr>
  <td><label>Kebele<label>
  	<select name="kebele" id="kebele">
  	 
  	<option value="01">
  	01
  </option>
    	<option value="02">
  	02
  </option>
    	<option value="03">
  	03
  </option>
  	<option value="04">
  	04
  </option>
  <option value="05">
  	05
  </option>
    	<option value="06">
  	06
  </option>
    	<option value="07">
  	07
  </option>
  	<option value="08">
  	08
  </option>
   <option value="09">
  	09
  </option>
    	<option value="10">
  	10
  </option>
    	<option value="11">
  	11
  </option>
  	<option value="12">
  	12
  </option>
  	
</select></td></tr>
		
		
<tr> <td><label>Home Number<label><input type="text" placeholder="Your Home Number" name="homeno" style="width: 200px;"></td></tr>
</div >

			<tr><td>***************************************************************************************</td></tr>
			

			<tr><td><label>Email</label></td></tr>
				<tr><td><input type="text" name="email" placeholder="Your@mail.com"></td></tr>	
			<tr><td><label>Password</label></td></tr>
			<tr><td><input type="password" name="password" placeholder="Atleast 8 characters"></td></tr>
			<tr><td><button name="signup">SIGN UP</button></td></tr>
	</table>
</form>
</body>
</html>