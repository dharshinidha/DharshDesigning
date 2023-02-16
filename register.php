<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$user =  $_POST['email'];
$password = $_POST['password'];
$confirm  = $_POST['confirmpassword'];
$gender = $_POST['gender'];
$phone = $_POST['mobilenumber'];
$con = @mysqli_connect('localhost','root','','details');
$query = "insert into user values ('$fname', '$lname', '$user', '$password', '$confirm', '$gender', '$phone')";
$result = mysqli_query($con,$query);
?>
<html>
<body>
<?php
if($result==1){
    ?>
<center><h2>Your Registration is Done</h2>
    <h5>Your username is</h5> <?php echo $user; ?>
    <h5>Your Password is</h5> <?php echo $password; ?>
<?php
}
?></center>

</body>
</html>
  
      
      




 
            
        
        
        
        
        
        
         
