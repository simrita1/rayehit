<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign-up form</title>
        <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="css/regis.css">
        <?php 
        include ('links/links.php');
    ?>
        <?php 
        include ('./db/connect.php');
            session_start();
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
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p>
                    <a href="" class="btn btn-block btn-google">
                        <i class="fa fa-google"></i> Sign Up with Google</a>
                    <a href="" class="btn btn-block btn-facebook">
                        <i class="fa fa-facebook-official"></i> Sign Up with Facebook</a>
                </p>
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>
                <form action="regis.php" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Full name" require>
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div>
                        <input name="mobile" class="form-control" placeholder="Phone number" type="number" required>
                    </div>

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
                        <input name="password" class="form-control" placeholder="Create password" type="password"
                            required>
                    </div>
                    <input type="hidden" name="signup" value="1">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                    </div>
                    <p class="text-center">Have an account? <a href="./login_index.php">Log In</a></p>
                </form>

            </article>
        </div>


    </body>

</html>