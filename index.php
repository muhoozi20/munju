    <?
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <div id="container-section">
        <div id="banner-section">BUS STATION</div>
        <div id="menu-section">
            <div class="nav-elements">
            <div class="menu">
                <button class="dropbtn">BUS</button>
                <div class="submenu">
                    <a href="">Create bus</a>
                    <a href="">View bus</a>
                </div>
            </div>
            <div class="menu">
                <button class="dropbtn">Schedule</button>
                <div class="submenu">
                    <a href="">Create Schedule</a>
                    <a href="">View Schedule</a>
                </div>
            </div>
            <div class="menu">
                <button class="dropbtn">Ticket</button>
                <div class="submenu">
                    <a href="">Create Ticket</a>
                    <a href="">View Ticket</a>
                </div>
            </div>
            <div class="menu">
                <button class="dropbtn">Users</button>
                <div class="submenu">
                    <a href="">Create Users</a>
                    <a href="">View Users</a>
                </div>
            </div>
            <div class="menu">
                <form action="index.php" method="post">
                <button class="dropbtn" name="btn">Login</button>
                </form>
                <?php
                if (isset($_POST["btn"])) {
                    header("location:./front-end/login.php");
                }
                
                ?>
            </div>



        </div>
        </div>
        <div id="content-section">
        </div>
        <div id="footer-section">welcome in 2025</div>


    </div>
</body>
</html>