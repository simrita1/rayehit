<?php
    require './classes/Property.php';

    function getAllPropertyType($mysqli){
        $types = array();
        $sql = "select * from propertytype";
        if ($data = $mysqli->query($sql)) {
            if ($data->num_rows > 0) {
                while ($t = $data->fetch_assoc()) {
                    array_push($types,$t['type']);
                }
            }else{
                array_push($types,"No Data");
            }
        }else{
            array_push($types,"No Data");
        }
        return $types;

    }

    function getFilteredProperty($mysqli,$location,$status,$max){
        $properties = array();
        $sql = "select * from properties where location like '%$location%' and status='$status' and price < $max";

        if ($max=="" && $location=="") {
            $sql = "select * from properties where status='$status'";
        }else if($max==""){
            $sql = "select * from properties where location like '%$location%' and status='$status'";

        }else if ($location == "") {
            $sql = "select * from properties where status='$status' and price < $max";
        }
        
        if ($data = $mysqli->query($sql)) {
            if ($data->num_rows > 0) {
                while ($p = $data->fetch_assoc()) {
                    $pid = $p['id'];
                    $name = $p['name'];
                    $l = $p['location'];
                    $bed = $p['bed'];
                    $bath = $p['bath'];
                    $area = $p['area'];
                    $img = $p['img'];
                    $type = $p['type'];
                    $price = $p['price'];
                    $s = $p['status'];
                    $property = new Property(
                        $pid,$name,$l,$bed,$bath,$area,$img,$type,$price,$s,$p['uid']
                    );
                    array_push($properties,$property);  
                }
            return $properties;
            }
        }
}


function getSellerProperty($mysqli,$uid){
    $properties = array();
    $sql = "select * from properties where uid=$uid";
    if ($data = $mysqli->query($sql)) {
        if ($data->num_rows > 0) {
            while ($p = $data->fetch_assoc()) {
                $pid = $p['id'];
                $name = $p['name'];
                $l = $p['location'];
                $bed = $p['bed'];
                $bath = $p['bath'];
                $area = $p['area'];
                $img = $p['img'];
                $type = $p['type'];
                $price = $p['price'];
                $s = $p['status'];
                $property = new Property(
                    $pid,$name,$l,$bed,$bath,$area,$img,$type,$price,$s,$p['uid']
                );
                array_push($properties,$property);  
                return $properties;

            }
        }else{
            return null;
        }
    }
}

function getUserFromId($conn,$uid){
    $sql = "Select * from registration where id = $uid";
    $lister = null;

    if ($data=$conn->query($sql)) {
        while ($row = $data->fetch_assoc()) {
            $lister = new User($row['id'],$row['username'],$row['mobile'],$row['email']);
        }
    }
    return $lister;

}
?>