<?php
    include './db/connect.php';
    include './classes/User.php';
    include './services.php';
    include './partials/featured.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
        <title>Add Listing</title>
        <link rel="stylesheet" href="./css/featuredcard.css">
        <link rel="stylesheet" href="./css/addproperty.css">
    </head>

    <body>
        <?php include './partials/nav.php'?>
        <?php
            if (!$loggedin) {
                header('location: ./login_index.php');
            }
        ?>
        <section class="formsection">
            <section class="sidebar mmedium">
                <div class="tab" id="basicInformation">
                    <i class="fa fa-info-circle"></i> Basic Information
                </div>
                <div class="tab" id="basicInformation">
                    <i class="fa fa-map-pin"></i>
                    Location
                </div>
                <div class="tab" id="basicInformation">
                    <i class="fa fa-usd"></i>
                    Pricing
                </div>
                <div class="tab" id="basicInformation">
                    <i class="fa fa-money"></i>
                    Rent/Sale
                </div>
            </section>
            <section class="form">
                <div class="formheader kbold">
                    List your property
                </div>
                <form enctype="multipart/form-data" autocomplete="off" action="list.php" method="POST">
                    <div class="inputgroup kregular">
                        <label>
                            Property Title
                        </label>
                        <br>
                        <input required name="title" placeholder="e.g. House for sell in Kathmandu"
                            class="inputbottom kbold" type="text">
                    </div>
                    <div class="inputgroup kregular">
                        <label>
                            Property Image
                        </label>
                        <br>
                        <input required name="image" class="inputbottom kbold" type="file" accept="image/*">
                    </div>
                    <div class="inputgroup kregular">
                        <label>
                            Property Location
                        </label>
                        <br>
                        <input required name="location" placeholder="e.g. Sorhakhutte, Kathmandu"
                            class="inputbottom kbold" type="text">
                    </div>
                    <div class="inputgroup kregular">
                        <label>Number of bedroom</label>
                        <input required type="number" placeholder="e.g. 5" min="0" class="kbold inputbottom" name="bed"
                            id="">
                    </div>
                    <div class="inputgroup kregular">
                        <label>Number of bathroom</label>
                        <input required placeholder="e.g. 2" type="number" min="0" class="kbold inputbottom" name="bath"
                            id="">
                    </div>
                    <div class="inputgroup kregular">
                        <label>Total Area
                            (Aana)
                        </label>
                        <input required type="number" min="1" placeholder="e.g. 4" class="inputbottom kbold" name="area"
                            id="">
                    </div>
                    <div class="inputgroup center kregular">
                        <label>
                            Listing Type
                        </label>
                        <br>
                        <div class="inputbottom">
                            For Sale: <input type="radio" checked value="sell" name="rs" id="rs">
                            For Rent: <input type="radio" value="rent" name="rs" id="rs">
                        </div>

                    </div>
                    <div class="inputgroup kregular">
                        <label>
                            Price (in NRS)
                        </label>
                        <br>
                        <input required name="price" placeholder="e.g. 25000" class="inputbottom kbold" type="text">
                    </div>
                    <div class="inputgroup kregular">
                        <label>
                            Property Type
                        </label>
                        <select required name="type" class="inputbottom" name="city" id="">
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
                    <input type="hidden" name="userid" value="<?php echo $user->id?>">
                    <input type="hidden" name="addproperty" value="1">
                    <div class="inputgroup buttons kregular">
                        <button class="primarybtn">
                            <i class="fa fa-plus"></i> List yout property
                        </button>
                    </div>
                </form>
            </section>
        </section>
    </body>

</html>