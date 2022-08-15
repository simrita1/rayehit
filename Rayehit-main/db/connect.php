<?php
    $mysqli = new mysqli('localhost','root','','rayehit');
    if ($mysqli) {
        echo "<script>console.log('Connection successful')</script>";
    }else{
        echo "<script>console.log('Connection Failed')</script>";

    }
?>