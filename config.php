<?php
session_start();
date_default_timezone_set('Asia/Manila');


class Model{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "ccfgentrias";
    private $conn;

    function __construct(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if($this->conn->connect_error){
            echo 'Connection Failed';
        }else{
            return $this->conn;
        }
    }

    public function insertRecord($post){
        $lname = $post['LName'];
        $fname = $post['FName'];
        $midInit = $post['MidInit'];
        $age = $post['age'];
        $cnum = $post['CNum'];
        $address = $post['Address'];
        $temp = $post['Temp'];
        $service = $post['Services'];
        $date = date("Y-m-d");
        $time = date("h:i:sa");

        $sql = "INSERT INTO contacttracing (LName, FName, MI, age, CNum, Address, Temperature, Date, Time, Service) VALUES ('$lname', '$fname', '$midInit', '$age', '$cnum', '$address', '$temp', '$date', '$time', '$service')";
        $result = $this->conn->query($sql);
        if($result){
            header('location:thank-you.php?msg=ins');
        }else{
            echo "Error ".$sql."<br>".$this->conn->error;
        }
    }

    public function displayRecord(){
        $sql = "SELECT * FROM contacttracing";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

    public function searchDisplay($post){
        $search = $post['searchQuery'];
        $sql = "SELECT * FROM contacttracing WHERE CONCAT (LName, FName, MI, Temperature, Date, Time, Service) LIKE '%".$search."%'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    public function exportDatabase(){
        $sql = "SELECT * FROM contacttracing";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            $output .= '
                <table class="table" bordered="1">
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                        <th>Temperature</th>
                        <th>Date attended</th>
                        <th>Service attended</th>
                    </tr>
            ';
            while ($row = $result->fetch_assoc()){
                $lastName = $row['LName'] . ', ' . $row['FName'] . ' ' . $row['MI'];
                $age = $row['age'];
                $contNum = $row['CNum'];
                $address = $row['Address'];
                $tempt = $row['Temperature'];
                $date = $row['Date'] . ' ' . $row['Time'];
                $service = $row['Service'];
                $output .= '
                    <tr>
                        <td>'.$lastName.'</td>
                        <td>'.$age.'</td>
                        <td>'.$contNum.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tempt.'</td>
                        <td>'.$date.'</td>
                        <td>'.$service.'</td>
                    </tr>
                ';
            }
            $output .= '</table>';
            header("Content-Type: application/xls");
            header("Content-Disposition: attachment; filename=download.xls");
            echo $output;
        }
    }

    public function adminCredentials($post){
        $user = strtolower($post['username']);
        $pass = $post['password'];
        $empty = "empty";

        if($user === 'admin' and $pass === 'admin1234'){
            $_SESSION['username'] = $user;
            header('location:admin.php');
        } else {
            header('location:login.php?Error=Please check admin credentials');
        }
    }

    public function logoutUser(){
        session_destroy();
        header('location:login.php');
    }
}