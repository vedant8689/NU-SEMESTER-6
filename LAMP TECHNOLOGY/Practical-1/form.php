<html>
	<head>
		<title>STUDENT REGISTRATION FORM</title>
	</head>
	<style>
		#H1{
			color: darkgreen;
			font-family: 'Times New Roman', Times, serif;
			font-size: 200%;
			text-align: center;
		}
		.FORM1{
			color: brown;
			text-align: center;
			font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
		}
		#Table{
			align-content: center;
			font-size: x-large;
			font-weight: 100;
			font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;		
		}
	</style>
	<script>
		function valid(){
			var Email = /^[0-9]{2,2}[a-zA-Z]{3,3}[0-9]{3,3}@[nirmauni.ac.in]/;
            var number = /^[0-9]{10}/;
            var password = /^(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
            var alphabets = /^[a-zA-Z]+$/;
			var n1 = document.getElementById("First_Name").value;
			var n2 = document.getElementById("Last_Name").value;
			var pass = document.getElementById("Password").value;
			var emid = document.getElementById("Email_Id").value;
			var contact_number = document.getElementById("contact_number").value;
			if(n1=="" || n2==""){
				window.alert("first name / last name cannot be empty");
			}
			if(alphabets.test(n1)==false){
				window.alert("enter correct first name")
			}
			if(alphabets.test(n2)==false){
				window.alert("enter correct last name")
			}
			if(password.test(pass)==false){
				window.alert("enter correct password");
			}
			if(Email.test(emid)==false){
				window.alert("enter correct email id");
			}
			if(number.test(contact_number)==false){
				window.alert("enter correct contact number");
			}
		}
	</script>
	<body>
		<h1 id="H1"> STUDENT REGISTRATION FROM </h1>
		<form class="FORM1" id="a" action="E:\HTML\lab6a.html" method = "get" onsubmit = "valid()">
			<table border="5px">
			<div id="Table">
				<tr>
                    <td><b>FIRST NAME</b><b style = "color:red;">*</b></td>
                    <td><input type="text" name="First_Name" id="First_Name" maxlength="25"></td>
                </tr>

				<tr>
                    <td><b>LAST NAME</b><b style = "color:red;">*</b></td>
                    <td><input type="text" name="Last_Name" id="Last_Name" maxlength="25" ></td>
                </tr>

				<tr>
                    <td><b>CONTACT NUMBER</b><b style = "color:red;">*</b></td>
                    <td><input type="text" name="contact_NUMBER" id="contact_number"></td>
                </tr>

				<tr>
                    <td><b>EMAIL ID</b><b style = "color:red;">*</b></td>
                    <td><input type="email" name="Email_Id" id="Email_Id" maxlength="100" ></td>
                </tr>

				<tr>
                    <td><b>PASSWORD</b></td>
                    <td>
                    <input type="password" name="Password" id="Password" minlength="8" ></td>
                </tr>

				<tr>
					<td><b>YOUR BRANCH</b></td>
					<td>
						<select id="Branch" name="Branch">
							<option value="-1">Select Branch:</option>
							<option value="CSE">COMPUTER SCIENCE & ENGINEERING</option>
							<option value="ECE">ELECTRONICS & COMMUNICATION ENGINEERING</option>
							<option value="Mech">ELECTRICAL ENGINEERING</option>
							<option value="Elec">MECHANICAL ENGINEERING</option>
							<option value="Civil">CIVIL ENGINEERING</option>
							<option value="Chem">CHEMICAL ENGINEERING</option>
						</select>
					</td>
				</tr>
			</div>
			<td colspan="2" align="center">
                <input type="submit" value="Submit" style="background-color: red; color: white;" >
                <input type="reset" value="Reset" style="background-color: red; color:yellow;">
                </td>
                </tr>
			</table>
		</form>
	</body>
</html>