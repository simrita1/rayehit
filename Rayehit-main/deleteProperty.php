<?php
    session_start();
    include './db/connect.php';
    include './classes/User.php';
    if (!isset($_SESSION['user'])) {
        header('location: ./index.php');
    }else{
        if (isset($_GET['id']) && isset($_GET['img'])) {
            $user = unserialize($_SESSION['user']);
            if ($user->owns($mysqli,$_GET['id'])) {
                $id = $_GET['id'];
                $sql = "delete from properties where id = $id";
                if ($mysqli->query($sql)) {
                    unlink($_GET['img']);
                    header('location:./sellerdb.php');
                }else{
                    echo "There was some error trying to delete the property. Please try again later.";
                    ?>
<script>
setTimeout(() => {
    window.location.href = './index.php';
}, 3000);
</script>
<?php
                }
            }else{
                echo "You do not own the property you are trying to delete.";
                ?>
<script>
setTimeout(() => {
    window.location.href = './index.php';
}, 3000);
</script>
<?php

            }
        }else{
            header('location: ./sellerdb.php');
        }
    }
?>