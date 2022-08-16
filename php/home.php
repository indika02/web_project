<?php
include_once ('link.php');
include_once ('db_connect.php');
session_start()
?>
<head>

    <link rel="stylesheet" href="../css/home.css"></head>
<header>
        <ul class="nav justify-content-end" style="background-color: grey" id="topnav">
            <li class="nav-item dropdown" style="background-color: grey" >
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name'];?></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><i class="fa fa-cog" aria-hidden="true"></i> My account</a>
                    <a class="dropdown-item" href="./sign up.php.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                </div>
            </li>
        </ul>
</header>

<h1>welcome <?php echo $_SESSION['name'];?></h1>