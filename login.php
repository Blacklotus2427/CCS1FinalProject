<?php
session_start();

if (isset($_SESSION['user_username'])) 
{   
    session_destroy();
    header(header: "Location: login.php");
    exit();
}

$errorMessage = "";
$setPassword = "thisisapassword";   
$sessionDelete = "delete"; // Debugging purposes to delete session on command
if (isset($_POST['user_username']) && isset($_POST['user_password'])) { // This took so long to implement because 
    $username = $_POST['user_username'];            // I was using visual studio code extensions to run it and then find out
    $userPassword = $_POST['user_password'];      // the hard way those aren't "servers" and thus I can't run and test these.
    if ($username === $sessionDelete)
    {
        session_destroy();
        header(header: "Location: login.php");
        exit();
    }
    if ($setPassword === $userPassword) {
        $_SESSION['user_username'] = $username;
        header(header: "Location: Homepage.php");
        exit();
    } else {
        $errorMessage = "Incorrect password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
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
            <?php if (!empty($errorMessage)): ?>
                <p style="color: red; margin-top: 15px;"><?= htmlspecialchars($errorMessage) ?></p>
                <p style="color: lightblue;"><?= htmlspecialchars("Password is: thisisapassword")?> </p>
            <?php endif; ?>
            </div>
        </form>
    </div>
</body>
</html>
