<?php
require_once ('connect.php');


    if(!empty($_POST)) {
        
        $check = array();
        
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = $_POST['password'];
        
        $sql = "INSERT INTO `login` (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($connection, $sql);
        
            if($result) {
                $msg = "Registration Succeeded!";
                    
                    $u = $_POST['username'];
                    $check[$username] = $username;
                
                    if(isset($check[$_POST['username']])) {
                        header('Location: yes.php');
                    }
                
            }
            else {
                $msg = "Registration Failed!";
            }
        
    }

?>

<!DOCTYPE html>
<!--
Copyright (C) 2017 RTGDaCoder

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Register | RTGNetwork </title>
        
        <script>
            
            window.alert("Welcome to RTGNetwork! Don't forget to register!!");
            
        </script>
        
    </head>
    <body>
        
        <form method="POST">
            
            <input type="text" name="username" placeholder="Enter your Username" required="">
            <br>
            <br>
            <input type="email" name="email" placeholder="Enter your Email" required="">
            <br>
            <br>
            <input type="password" name="password" placeholder="Enter your Password" required="">
            <br>
            <br>
            <button type="submit"> Register </button>
            <br>
            <br>
            <strong> <p> Have an account?</p> </strong>
            <a href="login.php"> Login </a> 
            
        </form>
        
        
    </body>
</html>
