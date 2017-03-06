<?php
session_start();
require_once 'connect.php';

    if(!empty($_POST)) {
        
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connection, $sql);
        $count = mysqli_num_rows($result);
        
            if($count === 1) {
                $_SESSION['username'] = $username;
            }
            else {
                $msg = "Invalid Username/Password!";
            }
        
    }
    
    if(isset($_SESSION['username'])) {
        $msg = "Already logged in!";
    }

?>

<!DOCTYPE html>
<!--
Copyright (C) 2017 RTG

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
        <title> Login | RTGNetwork </title>
    </head>
    <body>
        
        <form method="POST">
            
            <input type="text" name="username" placeholder="Your Username!">
            <br>
            <br>
            <input type="password" name="password" placeholder="Your Password!">
            <br>
            <br>
            <button type="submit"> Login </button>
            <br>
            <br>
            <strong>
                <p>
                    Don't have an account?
                </p>
            </strong>
            <a href="register.php"> Click me! </a>
            
        </form>
         
        
    </body>
</html>
