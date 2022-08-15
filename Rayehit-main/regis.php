<?php 
    include ('./db/connect.php');
    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "insert into registration(username,mobile,email,password) values('$username','$mobile','$email','$password')";
        if ($mysqli->query($query)) {
            header('location: ./login_index.php');
        }else{
            echo 'Registration Failed, Please try again later';
            header('refresh: 3;url:./regis_index.php');
        }
    }


?>