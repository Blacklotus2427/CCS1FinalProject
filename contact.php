<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <link rel="stylesheet" href="css/contact.css">
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
        <form action="">
                <h2>Contact Us!</h2>
                <div class="input-box">
                    <h4>Name</h4>
                    <input type="text" placeholder="<?php echo $_SESSION["user_username"] ?>">
                </div>
                <div class="input-box">
                    <h4>Email</h4>
                    <input type="text" placeholder="Email">
                </div>

            <div>
                <h4>Have any comments? Write them here!</h4>
                <div class="commentbox">
                    <textarea placeholder="Book. Librarian. Star and City."></textarea>
                </div>
            </div>
            <div class="submitbutton">
                <button type="submit">Submit</button>
            </div>
            </form>
        </div>
        </div>
        
        <div class="footer">
            <p>In terms of accreditation, Silliman is one of the top five universities in the Philippines with "Institutional Accreditation" by the Federation of Accrediting Agencies of the Philippines (FAAP). The Institutional Accreditation is the highest accreditation that can be granted to an educational institution after an assessment of its number of accredited programs, its facilities, its services, and its faculty is conducted as a whole. Incidentally, Silliman also has the highest number of accredited programs in the country, twenty of which are on Level IV accreditation status, the highest level that can be granted to individual programs.</p>
            </div>
    </body>
    </script>
</html>