<?php
require './db/connect.php';
    if (isset($_POST['addproperty'])) {
        $title = $_POST['title'];
        $location = $_POST['location'];
        $bed = $_POST['bed'];
        $bath = $_POST['bath'];
        $area = $_POST['area'];
        $rs = $_POST['rs'];
        $type = $_POST['type'];
        $price = $_POST['price'];
        $uid = $_POST['userid'];
        
        // Upload logic
        $extension = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
        $image = time().".$extension";
        $temp = $_FILES['image']['tmp_name'];
        $directory = "./img/$image";
        echo $directory;
        if (move_uploaded_file($temp,$directory)) {
            $query = "insert into properties(name,location,bed,bath,area,img,type,price,status,uid)
            values('$title','$location','$bed','$bath','$area','$directory','$type','$price','$rs','$uid')
            ";
            if ($mysqli->query($query)) {
                header('location: ./sellerdb.php');
            }else{
                echo "Listing property failed";
                header('refresh:3;url:./addproperty.php');
            }
        }

    }
?>