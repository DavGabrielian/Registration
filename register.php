<?php 

session_start();


// Logic from test.php goes here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Registration Form</title>

</head>
<body>
    <div class="wrapper fadeInDown">
        <div id='formContent'>

            <h2 class="active"> Sign In</h2>

                <!-- Registration Form -->
            <form method="post" action="test.php">
                <input type="text" name="fname" id="fname" placeholder="First name" required>
                <input type="text" name='lname' placeholder="Last name" required>    
                <input type="email" name='email' placeholder="Email Address" required> 
                <input type="password" name ='password' id="password"  placeholder="Password" required>
                <input type="password" name ='cpassword' id="cpassword"  placeholder="Confirm Password" required>
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>


            <div>
		        <h3><?php if(isset($_SESSION['error']['fnameErr'])) {echo $_SESSION['error']['fnameErr'];} ?></h3>
		        <h3><?php if(isset($_SESSION['error']['lnameErr'])) {echo $_SESSION['error']['lnameErr'];} ?></h3>
		        <h3><?php if(isset($_SESSION['error']['emailErr'])) {echo $_SESSION['error']['emailErr'];} ?></h3>
		        <h3><?php if(isset($_SESSION['error']['passwordErr'])) {echo $_SESSION['error']['passwordErr'];} ?></h3>
		        <h3><?php if(isset($_SESSION['error']['cpasswordErr'])) {echo $_SESSION['error']['cpasswordErr'];} ?></h3>
	        </div>

        </div>
    
    </div>



    <script src="./Login.js"></script>
</body>
</html>
<?php 
session_unset();