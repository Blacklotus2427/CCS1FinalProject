<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <link rel="stylesheet" href="css/Homepage.css">
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/4525/4525257.png" type="image/png">
    </head>

    <body>
        <nav>
            <div class="user" id="userProfile">Welcome, <?php echo $_SESSION['user_username']?>!</div>
            <div class="nav">
                <a href="Homepage.php">Home</a>
                <a href="Dumaguete.php">Dumaguete</a>
                <a href="Gallery.php">Gallery</a>
                <a href="contact.php">Contact</a>
                <a href="login.php">Log out</a>
            </div>
        </nav>
        
        <div class="background-image">
        
        <div class="content1" id="button">
            <h3>Welcome to the Homepage</h3>
        </div>
        </div>
        
        <div class="footer">
            <p>In terms of accreditation, Silliman is one of the top five universities in the Philippines with "Institutional Accreditation" by the Federation of Accrediting Agencies of the Philippines (FAAP). The Institutional Accreditation is the highest accreditation that can be granted to an educational institution after an assessment of its number of accredited programs, its facilities, its services, and its faculty is conducted as a whole. Incidentally, Silliman also has the highest number of accredited programs in the country, twenty of which are on Level IV accreditation status, the highest level that can be granted to individual programs.</p>
            </div>
    </body>
    <script>
    console.log(document.getElementById("content1"));
        let buttonClicked = 0;
        const listOfMessages = [
            "You clicked me!",
            "Good morning, <?php echo $_SESSION['user_username']?>!",
            "Wonderful day isn't it?",
            "You've clicked me {times}!",
            "random text message",
            "That message was a random one.",
            "<?php echo $_SESSION['user_username']?>, do you like coffee?"
            
        ]
        document.getElementById("button").addEventListener("click", function()
    {
        let randomIndex = Math.floor(Math.random() * listOfMessages.length) // get a random message
        let randomMessage = listOfMessages[randomIndex];
        console.log("Hello")
        buttonClicked++;
        randomMessage = randomMessage.replace("{times}", buttonClicked);
        document.getElementById("button").innerHTML = "<h3>" + randomMessage + "</h3>"
    })
    </script>
</html>