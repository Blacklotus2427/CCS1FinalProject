<?php
session_start();

// Define the correct password
$setpassword = "thisisapassword";

// Initialize error message
$errorMessage = "";
// Check if both username and password are set
if (isset($_POST['user_username']) && isset($_POST['user_password'])) {
    $username = $_POST['user_username'];
    $userPassword = $_POST['user_password'];

    // Validate the password
    if ($setpassword === $userPassword) {
        // Set the session username
        $_SESSION['user_username'] = $username;
        
        // Perform the redirection
        header("Location: test.php");
        exit();  // Ensure no further code is executed after redirection
    } else {
        // Set error message for incorrect password
        $errorMessage = "Incorrect username or password!";
    }
}

?>
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
            <form method="POST"> 
            
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username-field" name="user_username" placeholder="Enter your username" required aria-required="true">
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="userpassword-field" name="user_password" placeholder="Enter your password" required aria-required="true">
                </div>

                <div class="input-group">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>