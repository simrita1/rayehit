<?php
require("connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="login-form">
        <h2>Admin Login</h2>
        <form method="POST">
            <div class="input-field">
                <ion-icon name="person-circle"></ion-icon>
                <input type="text" placeholder="Username" name="AdminName">
            </div>

            <div class="input-field">
                <ion-icon name="lock-closed"></ion-icon>
                <input type="password" placeholder="Password" name="AdminPassword">
            </div>
            <button type="submit" name="register">Sign In</button>


        </form>
    </div>


    <?php
    if (isset($_POST['register'])) {
        $username = $_POST['AdminName'];
        $password = $_POST['AdminPassword'];

        $query = "select * from admin where 
            name='$username'and password='$password'";

        if ($data = $conn->query($query)) {
            while ($row = $data->fetch_assoc()) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $row['name'];
                header("Location: index.php");
            }
        }
    }

    ?>
</body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>