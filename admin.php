<?php
    include 'config.php';

    $obj = new Model();
    global $data;

    if(empty($_SESSION['username'])){
        header('location:login.php');
    }

    if(isset($_POST['logout'])){
        $obj->logoutUser();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCF General Trias, Cavite - Contact tracing</title>
    <link rel = "icon" href = "design/img/CCF-logo2.ico" type = "image/x-icon"> 

    <link rel="stylesheet" href="design/style-admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <!-- ----------------------------------------NAVIGATION---------------------------------------- -->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="admin.php">
                    <img src="design/img/CCF-logo2.png">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav" style="margin-left: auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff;">
                                <?php print_r(strtoupper("Welcome ".$_SESSION['username'])) ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                <li>
                                    <form method="post">
                                        <button class="btn bg-transparent" name="logout" style="color: #fff;">Log out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- ----------------------------------------BANNER---------------------------------------- -->
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Mission</h2>
                    <p>TO HONOR GOD AND MAKE CHRIST-COMMITTED FOLLOWERS WHO WILL MAKE CHRIST-COMMITTED FOLLOWERS.</p>
                    <p>“Go and make disciples of all nations, baptizing them in the name of the Father and of the Son and of the Holy Spirit, and teaching them to obey everything I have commanded you.”</p>
                    <p>Matthew 28:19-20</p>
                </div>
                <div class="col-md-6">
                    <h2>Vision</h2>
                    <p>OUR VISION IS TO SEE A MOVEMENT OF MILLIONS OF COMMITTED FOLLOWERS OF THE LORD JESUS CHRIST MEETING IN SMALL GROUPS AND TRANSFORMING LIVES, FAMILIES, COMMUNITIES AND NATIONS, FOR THE GLORY OF GOD.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ----------------------------------------WELCOME---------------------------------------- -->
    <section id="wlcm-body">
        <div class="container text-center">
            <h2>WELCOME <?php print_r(strtoupper($_SESSION['username'])) ?></h2>
            <a href="index.php#ctnTrace"><button type="button" class="btn btn-success">CCF Contact Tracing</button></a>
            <a href="table.php"><button type="button" class="btn btn-outline-light">Database Table</button></a>
        </div>
    </section>

    <!-- ----------------------------------------SOCIAL MEDIA---------------------------------------- -->
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