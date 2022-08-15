<?php
include_once ('link.php');
include_once ('db_connect.php');
session_start()
?>
<head><link rel="stylesheet" href="../css/home.css"></head>
        <ul class="nav justify-content-end bg-dark" id="topnav">
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name'];?></a>
                <div class="dropdown-menu">
                    <button class="btn btn-primary">My account</button>
                    <a class="dropdown-item" href="./sign%20up.php.php">Logout</a>
                </div>
            </li>
        </ul>
</nav>

<h1>welcome <?php echo $_SESSION['name'];?></h1>