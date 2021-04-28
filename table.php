<?php
    include 'config.php';
    $obj = new Model();
    global $data;
    $data = $obj->displayRecord();

    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }

    if(isset($_POST['exportTable'])){
        $obj->exportDatabase();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCF General Trias, Cavite - Contact tracing</title>
    <link rel = "icon" href = "design/img/CCF-logo2.ico" type = "image/x-icon"> 

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="design/style-table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
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
                                <li><a class="dropdown-item" href="admin.php">Admin Page</a></li>
                                <li><a class="dropdown-item" href="index.php#ctnTrace">CCF Contact Tracing</a></li>
                                <li><hr class="dropdown-divider"></li>
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

    <!-- ----------------------------------------TABLE---------------------------------------- -->
    <section id="table">
        <div class="container">
            <form action="" method="post">
                <button type="submit" class="btn btn-light btn-sm" name="exportTable" style="margin-left: auto">
                    <i class="fas fa-file-export"> Export Database</i>
                </button>
            </form>
            <div class="table-responsive">
                <table id="attendee-data" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Temperature</th>
                            <th>Date attended</th>
                            <th>Service attended</th>
                        </tr>
                    </thead>
                    <?php
                    if(!empty($data)){
                        foreach($data as $value){
                            $lastName = $value['LName'] . ', ' . $value['FName'] . ' ' . $value['MI'];
                            $age = $value['age'];
                            $contNum = $value['CNum'];
                            $address = $value['Address'];
                            $tempt = $value['Temperature'];
                            $date = $value['Date'] . ' ' . $value['Time'];
                            $service = $value['Service'];
                    ?>
                        <tr>
                            <td><?php echo $lastName ?></td>
                            <td><?php echo $age ?></td>
                            <td><?php echo $contNum ?></td>
                            <td><?php echo $address ?></td>
                            <td><?php echo $tempt ?></td>
                            <td><?php echo $date ?></td>
                            <td><?php echo $service ?></td>
                        </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>
</html>

<script>
    $(document).ready(function() {
        $('#attendee-data').DataTable();
} );
</script>