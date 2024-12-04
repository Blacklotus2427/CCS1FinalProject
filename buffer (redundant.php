<?php
session_start();
sleep(5);
$_SESSION['user_username'] = $_POST['user_username'];
$_SESSION['user_password'] = $_POST['user_password'];
if ($_POST['user_password'] === 'thisisapassword')
{
    header(header: "Location: test.php");
    exit();
}
else
{
    header(header: "Location: login.php");
}
// $errorMessage = "";
// $setPassword = "thisisapassword"; 
// $sessionDelete = "delete"; // Debugging purposes to delete session on command
// if (isset($_POST['user_username']) && isset($_POST['user_password'])) { // This took so long to implement because 
//     $username = $_POST['user_username'];            // I was using visual studio code extensions to run it and then find out
//     $userPassword = $_POST['user_password'];      // the hard way those aren't "servers" and thus I can't run and test these.
//     if ($username === $sessionDelete)
//     {
//         session_destroy();
//         header(header: "Location: login.php");
//         exit();
//     }
//     if ($setPassword === $userPassword) {
//         $_SESSION['user_username'] = $username;
//         header(header: "Location: test.php");
//         exit();
//     } else {
//         $errorMessage = "Incorrect password!";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="css/buffer.css">
    </head>
    <body>
        <div class="login-container">
            <h2>Welcome!</h2>
            <h2>Checking login details, please wait~</h2>
        </div>
        <?php if (!empty($errorMessage)): ?>
                <p style="color: red;"><?= htmlspecialchars($errorMessage) ?></p>
                <p style="color: lightblue;"><?= htmlspecialchars("Password is: thisisapassword")?> </p>
        <?php endif; ?>
    </body>
</html>
