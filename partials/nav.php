<link rel="stylesheet" href="./css/nav.css">
<nav>
    <div onclick="window.location.href='./index.php'" class="logo kbold">
        Rayehit
    </div>
    <div class="navigations mmedium">
        <span onclick="window.location.href='./explore.php'">
            Buying
        </span>
        <span onclick="window.location.href='./sellerdb.php'">Selling</span>
        <span onclick="window.location.href='./explore.php'">Renting</span>
        <span>Features</span>
        <span>Contact</span>
    </div>
    <div class="buttons">
        <?php
        $loggedin = false;
            if (!isset($_SESSION['user'])) {
                ?>
        <button onclick="window.location.href='login_index.php'" class="support">
            Login
        </button>
        <button onclick="window.location.href='regis_index.php'" class="primary-outline">
            Create Account
        </button>
        <?php
            }else{
                $loggedin = true;
                $user = unserialize($_SESSION['user']);
                ?>
        <button class="support">
            <?php echo $user->name?>
        </button>
        <button onclick="window.location.href='logout.php'" class="primary-outline">
            <i class="fa fa-sign-out"></i>
            Log out
        </button>
        <?php }
        ?>
    </div>
</nav>