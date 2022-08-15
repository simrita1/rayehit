<?php 
    include './partials/featured.php';
    require './db/connect.php';
    require './services.php';
    include './classes/User.php';
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Rayehit</title>
        <link rel="stylesheet" href="./css/style.css" />
        <link rel="stylesheet" href="./css/featuredcard.css">
    </head>

    <body>
        <?php include './partials/nav.php'?>


        <section class="landing">
            <div class="textSection kregular">
                <div class="large-title">
                    Find <span class="primarytext">Perfect</span> Place To Live Life.
                </div>
                <div class="tabs kbold">
                    <div class="tab selected">
                        Buy
                    </div>
                    <div class="tab">
                        Sell
                    </div>
                    <div class="tab">
                        Rent
                    </div>
                </div>
                <div class="searchbar">
                    <form action="explore.php" method="get">
                        <div class="inputgroup">
                            <div class="label mmedium">
                                City, Street
                            </div>
                            <select class="kbold" name="location" id="">
                                <option value="kathmandu">Kathmandu</option>
                                <option value="Lalitpur">Lalitpur</option>
                                <option value="Bhaktapur">Bhaktapur</option>
                                <option value="Biratnagar">Biratnagar</option>
                                <option value="Dharan">Dharan</option>
                            </select>
                        </div>
                        <div class="inputgroup">
                            <div class="label mmedium">
                                Property Type
                            </div>
                            <select class="kbold" name="type" id="">
                                <?php
                                    $types = getAllPropertyType($mysqli);
                                    foreach ($types as $type) {
                                        echo "
                                            <option value='$type'>$type</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="inputgroup">
                            <div class="label mmedium">
                                Max Price
                            </div>
                            <select class="kbold" name="maxprice" id="">
                                <option value="50000">Rs 50,000</option>
                                <option value="1000000">Rs 1,00,000</option>
                                <option value="1000000">Rs 10,00,000</option>
                                <option value="10000000">Rs 1,00,00,000</option>
                                <option value="">Rs 1,00,00,000 +</option>
                            </select>
                        </div>
                        <input type="hidden" value="1" name="filters">
                        <button class="searchbtn">
                            <i class="fa fa-search"></i>
                            Search
                        </button>
                    </form>
                </div>
            </div>
            <div class="imageSection">
                <img src="./img/mover.png">

                <div class="decoy-gradiant">

                </div>
            </div>
        </section>

        <section class="services">
            <div class="sectiontitle kregular">
                The <span class="primarytext">Services</span> You Get From Rayehit
            </div>
            <div class="subtitle kregular">
                <span class="wrapper">
                    Some people choose price as a primary reason. Those company getting customer because of
                    <br> price will
                    lose
                    them all.
                </span>
            </div>
            <div class="row cards">
                <div onclick="window.open('./explore.php','_self')" class="card">
                    <div class="cardicon">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="des">
                        <div class="card-title kbold">
                            Buy Properties
                        </div>
                        <div class="card-body kregular">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio beatae, dolor rerum qui non
                            pariatur cumque. Tenetur blanditiis ab iusto voluptatem
                        </div>
                    </div>
                </div>
                <div onclick="window.open('./sellerdb.php','_self')" class="card">
                    <div class="cardicon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="des">
                        <div class="card-title kbold">
                            Sell Properties
                        </div>
                        <div class="card-body kregular">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio beatae, dolor rerum qui non
                            pariatur cumque. Tenetur blanditiis ab iusto voluptatem
                        </div>
                    </div>
                </div>
                <div onclick="window.open('./explore.php','_self')" class="card">
                    <div class="cardicon">
                        <i class="fa fa-key"></i>
                    </div>
                    <div class="des">
                        <div class="card-title kbold">
                            Rent Properties
                        </div>
                        <div class="card-body kregular">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio beatae, dolor rerum qui non
                            pariatur cumque. Tenetur blanditiis ab iusto voluptatem
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="services">
            <div class="sectiontitle kregular">
                We Provide The <span class="primarytext">Best Based</span> On <br> The <span
                    class="primarytext">Property</span> You Like
            </div>
            <div class="subtitle kregular">
                <span class="wrapper">
                    Some people choose price as a primary reason. Those company getting customer because of
                    <br> price will
                    lose
                    them all.
                </span>
            </div>
            <div class="row cards">
                <?php 
                    $query = "Select * from properties order by id desc limit 3";
                    if ($data=$mysqli->query($query)) {
                        while ($row = $data->fetch_assoc()) {
                            echo getFeaturedCard(
                                $mysqli,
                                $row['img'],
                                $row['status'],
                                $row['type'],
                                $row['name'],
                                $row['bed'],
                                $row['location'],
                                $row['bath'],
                                $row['area'],
                                $row['price'],
                                $row['uid']
                            );
                        }
                    }
                
                ?>

            </div>
            <div onclick="window.open('./explore.php','_self')" class="seemore kmedium">
                See more <i class="fa fa-arrow-right"></i>
            </div>
        </section>
        <section class="footer">
            <div class="text kbold">
                No need to wonder around loking for a place to live, we're now live and here for your support.
                <div class="footer-btns">
                    <button onclick="window.open('./explore.php','_self')" class="">
                        <i class="fa fa-compass"></i>
                        Explore
                    </button>
                    <button>
                        <i class="fa fa-search"></i>
                        Search For Home
                    </button>
                </div>
            </div>
            <div class="img">
                <img src="./img/bg.jpg" alt="" srcset="">
            </div>
        </section>
    </body>

</html>