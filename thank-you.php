<?php
    if(isset($_POST['submit'])){
        header('location:index.php#ctnTrace');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCF General Trias, Cavite - Contact tracing</title>
    <link rel = "icon" href = "design/img/CCF-logo2.ico" type = "image/x-icon"> 

    <link rel="stylesheet" href="design/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <!-- ----------------------------------------NAVIGATION---------------------------------------- -->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-large navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="design/img/CCF-logo2.png">
                </a>
            </div>
        </nav>
    </section>

    <!-- ----------------------------------------BANNER---------------------------------------- -->
    <section id="banner">
    <div class="container">
        <img src="design/img/BTY+Logo+Website+2020+v2-01.png" alt="" class="thankYou" style="width:70%; display:block; margin-left:auto; margin-right:auto;">
        <form action="" method="post" style="align-items:center; justify-content:center; display:flex;">
            <input type="submit" class="btn btn-success" name="submit" value="Submit another form">
        </form>
    </div>
    <img src="design/img/wave.png" class="bottom-img">
    </section>

    <!-- SOCIAL MEDIA -->
    <section id="socialMedia">
        <div class="conatiner text-center">
            <p>Christ's commission fellowship - General Trias, Cavite</p>
            <p>Find Us On Social Media and Our Website</p>
            <div class="social-icons">
                <a href="https://www.ccf.org.ph/"><img src="design/img/CCF-logo.png" alt=""></a>
                <a href="https://www.facebook.com/CCFGenTri"><img src="design/img/facebook.png" alt=""></a>
                <a href="https://www.youtube.com/channel/UCF1Wrrlls2ioQyn5WG-_nIQ"><img src="design/img/youtube.png" alt=""></a>
            </div>
        </div>
    </section>
</body>
</html>