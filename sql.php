<?php 


$link=mysqli_connect("localhost", "root", "", "mydatabase");


if(mysqli_connect_errno()){
    die("Could not connect. " . mysqli_connect_error());
}


$query = mysqli_query($link, 'SELECT * FROM users');

// function getUsers ($myQuery){  

//     $output = [];
//     while ($row = mysqli_fetch_assoc($myQuery)){
//         $output[] = $row;
//         //array_push
//     }
//     return $output;
// }

// $users = getUsers($query);
 while( $row = mysqli_fetch_assoc($query) ) { ?>
    <tr id="<?php echo $row ['id']; ?>">
        <h3><?php echo $row ['id']; ?></h3>
        <h3><?php echo $row ['f_name']; ?></h3>
        <h3><?php echo $row ['l_name']; ?></h3>  				   				   				  
        <h3><?php echo $row ['email']; ?></h3> <br> <br>
   </tr>
<?php } 

