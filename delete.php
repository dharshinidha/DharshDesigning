<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
   
    $userid = $_GET['user'];
    $query = "delete from user where user='$userid'";
    $con=@mysqli_connect('localhost', 'root', '','details') or die ('Server Not Available');
    @mysqli_select_db($con,'details') or die ('Database Not Available');
    $result= mysqli_query($con,$query);
   header("Location: editview.php");
?>
