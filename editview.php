<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$con=@mysqli_connect('localhost', 'root', '','details') or die ('Server Not Available');
@mysqli_select_db($con,'details') or die ('Database Not Available');
$query = "select * from user";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>view Detail</title>
        <style>
            table,tr,th,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
            td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Total Client : <?php echo $count; ?></h1>
        <hr>
        <table border="0" width="100%" cellpadding="2">
            <thead>
                <tr>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>E-mailid</th>
                    <th>Password</th>
                    <th>Confirmpassword</th>
                    <th>Gender</th>
                    <th>Mobilenumber</th>
                              
                     <th>Edit/Delete</th>
                    
                </tr>
            </thead>
            <tbody>        
                <?php
                //$row = mysqli_fetch_assoc($result);
                //$row = mysqli_fetch_array($result);        

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['user']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['confirm']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td>
                            <a href="edit.php?user=<?php echo $row['user']; ?>">Edit</a> /
                            <a onclick="return confirm('Are You Sure');" href="delete.php?user=<?php echo $row['user']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <a href="index.php">HOME PAGE</a></li>
    </body>
</html>
