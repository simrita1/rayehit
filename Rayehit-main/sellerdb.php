<?php
    include './db/connect.php';
    include './classes/User.php';
    include './services.php';
    include './partials/selfProperty.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
        <title>Selling Dasboard</title>
        <link rel="stylesheet" href="./css/featuredcard.css">
        <link rel="stylesheet" href="./css/sellingdb.css">
    </head>

    <body>
        <?php include './partials/nav.php' ?>
        <?php
            if (!$loggedin) {
                header('location: ./login_index.php');
            }
        ?>
        <main>
            <section class="heading kregular">
                <div class="title">
                    Property you are selling or renting out
                </div>
                <div class="buttons">
                    <button onclick="window.location.href='./addproperty.php'" class="primarybtn">
                        <i class="fa fa-plus"></i>
                        Add more Property
                    </button>
                </div>
            </section>
            <section class="row">
                <?php
                    $sellerProperty = getSellerProperty($mysqli,$user->id);
                    if($sellerProperty == null){
                        echo "<div class=kbold>You are not selling any properties</div>";
                    }else{
                        foreach ($sellerProperty as $p) {
                            echo getFeaturedCard(
                                $p->id,$p->location,
                                $p->img,$p->status,$p->type,$p->name,$p->bed,$p->bath,$p->area,$p->price
                            );
                        }
                    }
                ?>
            </section>
        </main>
    </body>

</html>