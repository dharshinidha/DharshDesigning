<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$fname= $_REQUEST['fname'];
$lname= $_REQUEST['lname'];
$user=$_REQUEST['user'];
$password=$_REQUEST['password'];
$confirm=$_REQUEST['confirm'];
$gender=$_REQUEST['gender'];
$phone=$_REQUEST['phone'];
 $query = "update user set fname='$fname',lname='$lname' ,user='$user',password='$password',confirm='$confirm',gender='$gender' ,phone='$phone'  where user=trim('$user')";
    $con=@mysqli_connect('localhost', 'root', '') or die ('Server Not Available');
    @mysqli_select_db($con,'details') or die ('Database Not Available');
    
    $result=mysqli_query($con,$query);
    header("Location:editview.php");
?>

