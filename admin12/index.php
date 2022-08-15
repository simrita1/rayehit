<?php
include './services.php';
include '../db/connect.php';
include '../partials/featured.php';
include '../classes/User.php';
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/featuredcard.css">
    <link rel="stylesheet" href="../css/explore.css">
    <link rel="stylesheet" href="css/ad_style.css">
</head>

<body>
    <!-- navigation -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home"></ion-icon>
                        </span>
                        <span class="title">Admin Panel</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="grid"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-sharp"></ion-icon>
                        </span>
                        <span class="title">Buyer</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people"></ion-icon>
                        </span>
                        <span class="title">Seller</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="pricetag"></ion-icon>
                        </span>
                        <span class="title">Rent</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings"></ion-icon>
                        </span>
                        <span class="title">Setting</span>
                    </a>
                </li>

                <li>
                    <a href="signout.php">
                        <span class="icon">
                            <ion-icon name="log-out"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>

            </ul>
        </div>

        <!-- main -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="images/user1.jpg" alt="">
                </div>
            </div>

            <!-- cards -->
            <div class="cardBox">
                <!-- <div class="card">
                    <div>
                        <div class="numbers">980</div>
                        <div class="cardName">Daily Views</div>
                    </div>
                    <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div> -->

                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php
                            if ($data = $mysqli->query("SELECT * from registration")) {
                                if ($data->num_rows > 0) {
                                    echo $data->num_rows;
                                } else {
                                    echo 0;
                                }
                            } else {
                                echo 0;
                            }
                            ?>
                        </div>
                        <div class="cardName">Total Users</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php
                            if ($data = $mysqli->query("SELECT * from properties P,registration R where P.uid = R.id")) {
                                if ($data->num_rows > 0) {
                                    $count = 0;
                                    $readUser = array();
                                    while ($row = $data->fetch_assoc()) {
                                        if (!in_array($row['uid'], $readUser)) {
                                            array_push($readUser, $row['uid']);
                                            $count++;
                                        }
                                    }
                                    echo count($readUser);
                                } else {
                                    echo 0;
                                }
                            } else {
                                echo 0;
                            }
                            ?>
                        </div>
                        <div class="cardName">Seller</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="people-circle-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php
                            if ($data = $mysqli->query("SELECT * from properties")) {
                                if ($data->num_rows > 0) {
                                    echo $data->num_rows;
                                } else {
                                    echo 0;
                                }
                            } else {
                                echo 0;
                            }
                            ?>
                        </div>
                        <div class="cardName">Total properties</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </div>
                </div>
                <div class="add-card">
                    <form method="post">
                        <a href="addproperty.php">Add property</a>
                    </form>
                </div>
            </div>

            <!-- -----------property list---------- -->
            <!-- <div class="details">
                <div class="recentItems">
                    <div class="cardHeader">
                        <h2>Property lists</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                               <td>Id</td>
                               <td>Name</td>
                               <td>Location</td>
                               <td>Type</td>
                            </tr>
                        </thead>

                        <thead>
                            <tr>
                               <td>1</td>
                               <td>House for sell in Sorhakhutte</td>
                               <td>Sorhakhutte,kathmandu</td>
                               <td>Apartment</td>
                            </tr>

                            <tr>
                               <td>2</td>
                               <td>Banasthali ma ghaderi bikri ma</td>
                               <td>Banasthali,kathmandu</td>
                               <td>Stdio</td>
                            </tr>

                            <tr>
                               <td>3</td>
                               <td>House for sell in Paknajol</td>
                               <td>Paknajol,kathmandu</td>
                               <td>Resident</td>
                            </tr>

                            <tr>
                               <td>7</td>
                               <td>House for sell in godawari</td>
                               <td>Godawari Latipur</td>
                               <td>Resident</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div> -->


            <div class="row cards">
                <?php
                $query = "Select * from properties order by id desc";
                if ($data = $mysqli->query($query)) {
                    while ($row = $data->fetch_assoc()) {

                ?>
                        <div class="card__container">
                            <div class="card__img-container">
                                <img src="<?php echo '../' . $row['img'] ?>" alt="img">
                            </div>
                            <div class="card__title">
                                <?php echo $row['name']; ?>
                            </div>
                            <div class="card__delete-btn">
                                <button onclick=window.location.href='delete.php?id=<?php echo $row["id"]; ?>'>Delete me</button>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

            </div>
        </div>

    </div>

    <!-- ===========script========== -->
    <script src="js/main.js"></script>

    <!-- ========ionicons========= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>