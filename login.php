<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="/css/login.css">
    </head>
    <body>

        <div class="login-container">
        
            <h2>Welcome!</h2>
            <h2>Enter your login details</h2>
            <form action="/login" method="POST"> 
            
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required aria-required="true">
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="userPassword" name="password" placeholder="Enter your password" required aria-required="true">
                </div>

                <div class="input-group">
                    <button type="submit">Login</button>
                </div>
            
                
            </form>
        </div>

    </body>
</html>