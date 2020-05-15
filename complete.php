<?php 
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Registration Complete!</title>
</head>
<body>
    
<h2 class="active">Accounts Info</h2>

<div> 
<h3>
    <?php 
    // functions from func.php 
    // which brings back the validations
    // from test.php to echo on page
    
    include 'func.php';
    echo getSession('fname', 'fnameErr');
    ?> 
</h3>
<h3>
    <?php 
    echo getSession('lname', 'lnameErr');
    ?> 
</h3>
<h3>
    <?php 
    echo getSession('email', 'emailErr');
    ?> 
</h3>
<h3>
    <?php
    if (!empty($_SESSION['cpassword'])) {
    echo $_SESSION['cpassword'];
    } else if (!empty($_SESSION['error']['passwordErr'])) {
    echo $_SESSION['error']['passwordErr'];
    } else if (!empty($_SESSION['error']['cpasswordErr'])) {
    echo $_SESSION['error']['cpasswordErr'];
    }
?>

<?php

include 'sql.php';


?>


</h3>
</div>
<?php 
session_unset();
?>
</body>
</html>