<?php
    include './services.php';
    include './db/connect.php';
    include './partials/featured.php';
    include './classes/User.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Explore</title>
        <link rel="stylesheet" href="./css/featuredcard.css">
        <link rel="stylesheet" href="./css/explore.css">
    </head>

    <body>
        <?php include './partials/nav.php'?>
        <?php include './partials/secondnav.php'?>
        <main>

            <div class="row">
                <?php
                $properties = "";
                if (isset($_GET['filters'])) {
                    $search = "";
                    $status = "sell";
                    $max = "";
                    if (isset($_GET['status'])) {
                        $status=$_GET['status'];   
                    }
                    
                    if (isset($_GET['location'])) {
                        $search=$_GET['location'];

                    }
                    if (isset($_GET['maxprice'])) {
                        $max=$_GET['maxprice'];
                    }
                    
                    $properties = getFilteredProperty($mysqli,$search,$status,$max);
                    if($properties == null){
                       ?>
                <div class="title kbold largetext">
                    404 Property not found
                </div>
                <br>
                <?php
                    }else{
                        foreach ($properties as $p) {
                            echo getFeaturedCard(
                                $mysqli,
                                $p->img,$p->status,$p->type,$p->name,$p->bed,$p->location,$p->bath,$p->area,$p->price,$p->uid
                            );
                        }
                    }
                }else{
                    $status = "sell";
                    $search='';
                    $max='';
                    $properties = getFilteredProperty($mysqli,$search,$status,$max);
                    if (count($properties) > 0) {
                        foreach ($properties as $p) {
                            echo getFeaturedCard(
                                $mysqli,
                                $p->img,$p->status,$p->type,$p->name,$p->bed,$p->location,$p->bath,$p->area,$p->price,$p->uid
                            );
                        }
                    }
                }
            ?>
            </div>
        </main>
    </body>
    <script src="./js/searchcontrol.js"></script>

</html>