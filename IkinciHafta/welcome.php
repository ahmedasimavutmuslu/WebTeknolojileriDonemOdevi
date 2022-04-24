<?php

    session_start();
    if(!isset($_SESSION['username'])) 
    {
        header("Location: index.php");
    }

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Giriş Başarılı</title>
</head>
<body>
    <div class="container">
        
        <?php echo "<p class=\"login-text\">Hoşgeldin ".$_SESSION['username']."!</p>"; ?>
        <br>
        <a href="index.php" class="redirect"> Ana Sayfaya Geri Dön</a>

    </div>

    

</body>
</html>