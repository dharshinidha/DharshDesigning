<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

    $userid = $_GET['user'];
    $query = "select * from user where user='$userid'";
    $con=@mysqli_connect('localhost', 'root', '','details') or die ('Server Not Available');
    @mysqli_select_db($con ,'details') or die ('Database Not Available');
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dharsh Designing</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
    </head>
    <body>
        <form action="updateview.php" method="get">
            <table width="50%" cellpadding="10">
                <tbody>
                    <tr>
                        <td>FirstName: </td>
                        <td><input type="text" name="fname" value="<?php echo $row['fname'];?>" />*</td>
                    </tr>
                    <tr>
                        <td>LastName: </td>
                        <td><input type="text" name="lname" id="lname" value="<?php echo $row['lname'];?>" />*</td>
                
                    </tr>
                    <tr>
                        <td>user: </td>
                        <td><input type="text" name="user" id="email" value="<?php echo $row['user'];?>" />*</td>
                
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="text" name="password" id="password" value="<?php echo $row['password'];?>" />*</td>
                
                    </tr>
                    <tr>
                        <td>Confirmpassword: </td>
                        <td><input type="text" name="confirm" id="confirm" value="<?php echo $row['confirm'];?>" />*</td>
                
                    </tr>
                    <tr>
                        <td>Gender: </td>
                        <td><input type="text" name="gender" id="gender" value="<?php echo $row['gender'];?>" />*</td>
                
                    </tr>
                    <tr>
                        <td>Mobilenumber: </td>
                        <td><input type="text" name="phone" id="phone" value="<?php echo $row['phone'];?>" />*</td>
                
                    </tr>
                    
                    
                        <td align="center" colspan="2">
                            <input type="submit"  value="Update view" />
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="button" onclick="history.go(-1);"  value="Cancel" />
                        </td>
                    </tr>                    
                </tbody>
            </table>
        </form>
    </body>
</html>