<?php 
    include './db/connect.php';
    include './classes/User.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign-in</title>
        <link rel="stylesheet" href="css/regis.css">
        <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

        <?php 
        include ('links/links.php');
    ?>
    </head>

    <body>
        <?php include './partials/nav.php'?>
        <?php
            if ($loggedin) {
                header('location: ./index.php');
            }
        ?>
        <div class="card bg-light">

            <article class="card-body mx-auto" style="max-width:400px;">
                <?php
                    if (isset($_POST['signin'])) {
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $query = "select * from registration where email='$email' and password='$password'";
                        if ($data = $mysqli->query($query)) {
                            if ($data->num_rows < 1) {
                                echo "No user found with the username and password";
                            }else{
                                while ($row = $data->fetch_assoc()) {
                                    $name = $row['username'];
                                    $email = $row['email'];
                                    $id = $row['id'];
                                    $mobile = $row['mobile'];
                                    $user = new User($id,$name,$mobile,$email);
                                    $_SESSION['user'] = serialize($user);
                                    header('location:./index.php');
                                }
                            }
                        }
                    }
                ?>
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p>
                    <a href="" class="btn btn-block btn-google">
                        <i class="fa fa-google"></i> Sign In with Google</a>
                    <a href="" class="btn btn-block btn-facebook">
                        <i class="fa fa-facebook-official"></i> Sign In with Facebook</a>
                </p>
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>
                <form action="#" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email address" type="email" required>
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input name="password" class="form-control" placeholder="Password" type="password" required>
                    </div>
                    <input type="hidden" name="signin" value="1">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <p class="text-center">Not have an account? <a href="./regis_index.php">Sign Up Here</a></p>

                </form>
            </article>
        </div>

    </body>

</html>