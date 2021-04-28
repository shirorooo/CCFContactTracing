<?php
    include 'config.php';

    $obj = new Model();

    if(isset($_POST['submit'])){
        $obj->adminCredentials($_POST);
        print_r($obj);
        if($obj === 'empty'){
            echo '<script>alert("Error: Wrong admin credentials!")</script>';
        }
    }

    if(!empty($_SESSION['username'])){
        header('location:admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCF General Trias, Cavite - Contact tracing</title>
    <link rel = "icon" href = "design/img/CCF-logo2.ico" type = "image/x-icon"> 

    <link rel="stylesheet" href="design/style-login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head> 
<body>
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="leftCtn">
                         <div class="row">
                            <div class="col-sm-6" id="ctn-leftCtn">
                                <h2>Mission</h2>
                                <p>TO HONOR GOD AND MAKE CHRIST-COMMITTED FOLLOWERS WHO WILL MAKE CHRIST-COMMITTED FOLLOWERS.</p>
                                <p>“Go and make disciples of all nations, baptizing them in the name of the Father and of the Son and of the Holy Spirit, and teaching them to obey everything I have commanded you.”</p>
                                <p>Matthew 28:19-20</p>
                            </div>
                            <div class="col-sm-6" id="ctn-leftCtn">
                                <h2>Vision</h2>
                                <p>OUR VISION IS TO SEE A MOVEMENT OF MILLIONS OF COMMITTED FOLLOWERS OF THE LORD JESUS CHRIST MEETING IN SMALL GROUPS AND TRANSFORMING LIVES, FAMILIES, COMMUNITIES AND NATIONS, FOR THE GLORY OF GOD.</p>
                            </div>
                         </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rightCtn">
                        <form action="" class="myForm text-center" method="post">
                            <header>Admin Login</header>
                            <?php
                                if(@$_GET['Error']==true){
                            ?>
                                <div class="alert alert-success" role="alert">
                                    Please check admin credentials!
                                </div>
                            <?php
                                }
                            ?>
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input type="text" class="myInput" placeholder="Username" required name="username">
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input type="password" class="myInput" placeholder="Password" required name="password">
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <input type="submit" class="btn btn-success" value="Log In" name="submit">
                        </form>
                        <div class="formCutter"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>