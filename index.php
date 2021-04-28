<?php
    include 'config.php';

    //CALLING THE CLASS THAT HAS BEEN MADE IN config.php
    $obj = new Model();
    

    //INSERT RECORD BY GIVING THE SUBMIT BUTTON A FUNCTION
    if(isset($_POST['submit'])){
        $obj->insertRecord($_POST);
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <!-- ----------------------------------------NAVIGATION---------------------------------------- -->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <?php
            if(isset($_SESSION['username'])){
            ?>
                <a class="navbar-brand" href="admin.php">
                    <img src="design/img/CCF-logo2.png">
                </a>
            <?php
            } else {
            ?>
            <a class="navbar-brand" href="index.php">
                <img src="design/img/CCF-logo2.png">
            </a>
            <?php
            }
            ?>
            
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
        <img src="design/img/wave.png" class="bottom-img">
        <div id="ctnTrace"></div>
    </section>

    <!-- ----------------------------------------FORMS---------------------------------------- -->
    
    <section id="forms">
        <h1>CONTACT TRACING</h1>
        <form action="" method="post">
            <div class="container">
                <div class="contact-form row">
                    <div class="form-field col-md-3">
                        <input id="lname" class="input-text" type="text" name="LName" placeholder="Last Name" required="">
                    </div>
                    <div class="form-field col-md-3">
                        <input id="Fname" class="input-text" type="text" name="FName" placeholder="First Name" required="">
                    </div>
                    <div class="form-field col-md-3">
                        <input id="middleInit" class="input-text" type="text" name="MidInit" placeholder="M.I." required="">
                    </div>
                    <div class="form-field col-lg-10">
                        <input id="age" class="input-text" type="number" name="age" placeholder="Age" required="">
                    </div>
                    <div class="form-field col-lg-10">
                        <input id="contacts" class="input-text" type="text" name="CNum" placeholder="Contact Number" required="">
                    </div>
                    <div class="form-field col-lg-10">
                        <input id="address" class="input-text" type="text" name="Address" placeholder="Address" required="">
                    </div>
                    <div class="form-field col-lg-10">
                        <input id="temp" class="input-text" type="number" step=".01" name="Temp" placeholder="Temperature" required="">
                    </div>
                    <div class="form-field col-lg-10">
                    <select class="form-select" aria-label="Default select example" name="Services" required="">
                        <option disabled selected>-- Worship Service You're Attending --</option>
                        <option value="1st Service">First Worship Service</option>
                        <option value="2nd Service">Second Worship Service</option>
                        <option value="3rd Service">Third Worship Service</option>
                    </select>
                    </div>
                    <div class="form-field col-lg-6">
                        <input name="submit" type="submit" class="submit-btn" value="Submit">
                    </div>
                </div>
            </div>
        </form>
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