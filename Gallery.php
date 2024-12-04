<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Gallery</title>
	
    <link rel="stylesheet" href="css/Gallery.css">
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/128/4525/4525257.png" type="image/png">
</head>
<body>
	 
    <nav>
        <div class="user" id="userProfile">Welcome, <?php echo $_SESSION['user_username']?></div>
        <div class="nav">
            <a href="Homepage.php">Home</a>
            <a href="Dumaguete.php">Dumaguete</a>
            <a href="Gallery.php">Gallery</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Log out</a>
        </div>
    </nav>

    <div class="container">
	
      <img src="https://static1.detourista.com/wp/wp-content/uploads/Unorganized/Dumaguete-Featured-Image.jpg">
      <img src="https://live.staticflickr.com/4386/37322550755_11790ec855_b.jpg">
      <img src="https://files01.pna.gov.ph/category-list/2024/05/29/dumaguete-cathedral-belfry-jfp-photo-.jpeg">
      <img src="https://dumagueteinfo.com/attractions/app/uploads/2018/11/su.png">
      <img src="https://filmphilippines.com/sites/default/files/RELIGIOUS-Silliman_University_Church%2C_Dumaguete_0.jpg">
      <img src="https://t4.ftcdn.net/jpg/03/61/92/67/360_F_361926755_hxP5DweSXBOuqnbbGUWxrJatwgrmEYFl.jpg">
      <img src="https://cdn.manilastandard.net/wp-content/uploads/2021/10/8fa28_smart_city_dumaguete.jpg">
      <img src="https://nopostcode.com/wp-content/uploads/2021/08/Best-Beaches-In-Dumaguete-13-1024x682.jpg">
      <img src="https://images.pexels.com/photos/1390072/pexels-photo-1390072.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
      <img src="https://images.pexels.com/photos/8358877/pexels-photo-8358877.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
	  
	  
	  
	  
	  </div>
</body>
</html>