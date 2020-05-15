     <h3> <? echo $_SESSION['login'] ?> </h3>
              <h3> <? echo $_SESSION['email'] ?></h3>
              <h3> <? echo $_SESSION['tel'] ?></h3>
              <h3> <? echo $_SESSION['loginErr'] ?> </h3>
              <h3> <? echo $_SESSION['emailErr'] ?></h3>
              <h3> <? echo $_SESSION['telErr'] ?></h3>

<?php          
  
// $_SESSION["loginErr"]=$loginErr;
// $_SESSION["emailErr"]=$emailErr;
// $_SESSION["telErr"]=$telErr;
// $_SESSION["passwordErr"]=$passwordErr;
// $_SESSION["cpasswordErr"]=$cpasswordErr;
// $_SESSION["login"]=$login;
// $_SESSION["email"]=$email;
// $_SESSION["tel"]=$tel;
// $_SESSION["password"]=$password;
// $_SESSION["cpassword"]=$cpassword;


if ($_SESSION['passwordErr']) {
    echo $_SESSION['passwordErr'];
} else if ($_SESSION['cpasswordErr']) {
    echo $_SESSION['cpasswordErr'];
} else {
    echo $_SESSION['cpassword'];
}
?>

// this got replaced by function
<div> 
<h3>
    <?php 
    include 'func.php';
    getSession('login', 'loginErr');

    if(!empty($_SESSION['login'])) {
    echo $_SESSION['login'];
    } else if (!empty($_SESSION['loginErr'])) {
    echo $_SESSION['loginErr'];
    }
    ?> 
</h3>
<h3>
    <?php 
    if(!empty($_SESSION['email'])) {
    echo $_SESSION['email'];
    } else if (!empty($_SESSION['emailErr'])) {
    echo $_SESSION['emailErr'];
    }
    ?> 
</h3>
<h3>
    <?php 
    if(!empty($_SESSION['tel'])) {
    echo $_SESSION['tel'];
    } else if (!empty($_SESSION['telErr'])) {
    echo $_SESSION['telErr'];
    }
    ?> 
</h3>
<h3>
    <?php
    if (!empty($_SESSION['cpassword'])) {
    echo $_SESSION['cpassword'];
    } else if (!empty($_SESSION['passwordErr'])) {
    echo $_SESSION['passwordErr'];
    } else if (!empty($_SESSION['cpasswordErr'])) {
    echo $_SESSION['cpasswordErr'];
    }


session_unset()
?>
</h3>



</div>


<?php 

session_start();

    $link = mysqli_connect('localhost', 'root', '', 'mydatabase',);

    // ERRORS

    //  $sql = mysqli_query($link, "SELECT * FROM users");
    
    // $row = mysqli_fetch_assoc($q);

    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";

      if(isset($_POST['submit']))
      {    
           $fname = $_POST['fname'];
           $lname = $_POST['lname'];
           $email = $_POST['email'];
           $cpassword = $_POST['cpassword'];
           

    $sql = mysqli_query($link, "ISNERT INTO users (f_name, l_name, email, password) 
            VALUES ('$fname', '$lname', '$email', '$cpassword')");

      }
    // while ($row = mysqli_fetch_assoc($query)) {
    //     echo $row;
    // }

    // header("Location: done.php"); 
