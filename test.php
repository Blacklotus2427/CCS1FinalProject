<?php
session_start();
?>
<style>
    .box
    {
        border: solid;
        border-width: 3px;
        width: 30%;
    }
</style>
<div class="box">
    <div>
        Full Name: <?php echo $_SESSION['user_username']?>
    </div>
    <div>
        Email Address: <?php echo $_SESSION['user_password']?>
    </div>
</div>