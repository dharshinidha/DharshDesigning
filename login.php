<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$username = $_POST['login'];
$password = $_POST['password'];
$con = @mysqli_connect('localhost','root','','details');
$query = "select user, password from user";
$result = mysqli_query($con,$query);

