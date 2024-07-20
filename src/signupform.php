

<?php
	include 'header.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$p1 = $_POST['password_1'];
		$p2 = $_POST['password_2'];

		// Check password match only once
		if ($p1 != $p2) {
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-color:rgb(240,174,222); border-radius:5px 5px 5px 5px;border-style: groove;">
			<div style="margin-left:20px"><strong>Not matched!</strong> Your Password is : ' . $p1 . ' and confirm-Password is : ' . $p2 . ' both are not same <br>Please Enter the Same Password
			</div>
			</div>';
		} 
		else 
		{
			// Connect to database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "employee_management";

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// Check connection
			if (!$conn) 
			{
				die("Connection failed: " . mysqli_connect_error());
			}

			// Escape user input to prevent SQL injection
			$name = mysqli_real_escape_string($conn, $_POST['name']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$mob = mysqli_real_escape_string($conn, $_POST['mobile']);
			$password = mysqli_real_escape_string($conn, $_POST['password_1']);
			$genders = $_POST['gender'];
			$salary = mysqli_real_escape_string($conn, $_POST['salary']);
			$address = mysqli_real_escape_string($conn, $_POST['address']);

			// Corrected SQL statement with backticks for table and column names
			$sql = "INSERT INTO `employee` (`EMP_Name`, `Email`, `Mobile`, `Password`, `Gender`, `Salary`, `Address`, `dt`) VALUES ('$name', '$email', '$mob', '$password', '$genders', '$salary', '$address', current_timestamp());";

			// echo $sql; // for debugging purposes, remove in production

			if ($conn->query($sql) === true) {
			echo "<h2>Record Inserted successfully</h2> Please click on <strong><a href='login.php'>Login</a></strong>";
			} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		}
	}
?>

<style>
    .reggister-bodypart
{
	width: 1344;
	height: 1200px;
	border-style: groove;
	margin-top: 5px;
	background-color: #F0FBF8;
}
.reggister-bodypart .reggister
{
	width: 35%;
	margin: 50px auto 0px;
	color: white;
	/* background: rgb(0,94,78); */
    background: rgb(10,100,198);
	text-align: center;
	border:1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
.reggister-bodypart .input-group-eg label
{
	display: block;
	text-align: left;
	margin: 3px;
}

.reggister-bodypart .input-group-eg input
{
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.reggister-bodypart .btn-eg
{
	width: 94%;
	height: 50px;
	font-size: 15px;
	color: white;
	background: rgb(10,100,198);
	border: none;
	border-radius: 5px;
	text-align: center;
	
}
</style>

	


<div class="reggister-bodypart">			
			<center>
				
				<div class="reggister">
				<h1>Registration</h1>
				</div>
			</center>

			


			<form method="post" action="signupform.php" style="border-radius: 0px 0px 10px 10px;padding: 20px;
				width: 35%;	margin: 0px auto;	background: white;	border:1px solid #B0C4DE;" >

										

					<div class="input-group-eg" style="margin: 10px 0px 10px 0px;">
						<label><b>Name</b></label>
						<input type="text" name="name" id="name" placeholder="Enter Full Name" required="fill this section" >
					</div><br>
                    <div class="input-group-eg">
						<label"><b>Email</b></label>
						<input type="email" name="email" id="email" placeholder="abc@mail.com" required="">
					</div><br>
                    <div class="input-group-eg">
						<label ><b>Mobile</b></label>
						<input type="number" name="mobile" id="mobile" placeholder="Enter Mobile number" required="" minlength="10" maxlength="10">
					</div></br>

					<div class="input-group-eg">
						<label><b>Password</b></label>	
						<input type="password" name="password_1" id="password_1" placeholder="**********" required="">
					</div>
					<div class="input-group-eg">
						<label><b>Confirm-Password</b></label>
						<input type="password" name="password_2" id="password_2" placeholder="**********" required="" >
					</div><br>
							<!-- <?php 
								if($_SERVER["REQUEST_METHOD"]=="POST")
								{
									$p1=$_POST['password_1'];
									$p2=$_POST['password_2'];
									if($p1!=$p2)
									{
										echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
										<strong>Not matched!</strong> Your Email is '.$p1. ' and Password is '.$p2.' thank you';
									}	
								}
							?> -->
					<div style="font-size: 20px;">
						<label><b>Gender</b></label>
						<input type="radio" name="gender" id="gender" value="male">male
						<input type="radio" name="gender" id="gender" value="female">female
					</div><br>
					
                    <div class="input-group-eg">
						<label ><b>Salary</b></label>
						<input type="number" name="salary" id="salary" required="" maxlength="10">
					</div></br>
                    <div class="input-group-eg">
						<label ><b>Address</b></label>
						<textarea name="address" id="address" placeholder="Enter Address" style="height: 70px; width: 93%; padding: 5px 10px; font-size: 16px; border-radius: 5px; border: 1px solid gray;"></textarea>
					</div></br>
					
					<div class="btn-eg">
						<button type="submit" name ="reggister"class="btn-eg"><b>reggister</b></button>
					</div><br>
					<div class="btn-eg">
						<button type="reset" name ="reset"class="btn-eg"><b>Reset</b></button>
					</div>
				<p>
					Already a member ? <a href="login.php">sign in</a>
				</p>
	
	</form>


</div>
