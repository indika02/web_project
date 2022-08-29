<?php
include_once ('db_connect.php');
include_once ('link.php');

include_once ('delete.php');

session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/notice.css">
    <link rel="stylesheet" href="../css/footer.css">
    <style>
        #topic{
            text-align: center;
            font-weight: bold;
            color: #000000;
            font-family: Poppins, sans-serif;
            font-size:40px;
            padding-top: 30px;
            color: #1c2286;
        }
    </style>
</head>
<body>
<header>

    <nav class="navbar navbar-expand-lg navbar-dark  navbar-fixed-top" style="color:black;background-color: white;box-shadow: 0px 1px 10px #ffffff;">

        <img src="../img/pngtree-vision-logo-design-vector-png-image_5491924.jpg" style="width: 100%;max-width: 139px;height: 80px">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="background-color: grey;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="color:black">
                    <a class="nav-link" style="color:#080c33;" href="./index.html">HOME<span class="sr-only">(current)</span></a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" style="color:#080c33" href="#section1">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#080c33;" href="team.php">LECTURES</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="color:#080c33" href="./notices.php">NOTICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#080c33" href="./contact.php">CONTACT US</a>
                </li>

                <li class="nav-item">
                    <button class="btn btn-primary"><a style="text-decoration: none;color: white;" href="sign%20up.php.php"><b>LOGIN</b></a></button>
                </li>

            </ul>
        </div>
    </nav>
</header>
<!--<body style="background-color: #e3dfdf">-->
<div class="container">
    <h2 id="topic" style="padding-top: 10px">Timetable</h2>
    <table class="table table-bordered" style="padding-top: 50px;">
        <thead>
        <tr style="font-size: 15px;">
            <th scope="col">ID</th>
            <th scope="col">Grade</th>
            <th scope="col">Class</th>
            <th scope="col">Lecturer</th>
            <th scope="col">Date</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Venue</th>


        </tr>
        </thead>
        <tbody>
        <?php
$sql="select t_id,class.class,class.lecturer,timedate,timefrom,timeto,venue,sec_id FROM timetable,class WHERE class.class_id=timetable.class_id;";
        $query=$conn->query($sql);

        while($row=$query->fetch_assoc()){
            ?>
            <td><?php echo $row['t_id'];?></td>
            <td><?php echo $row['sec_id'];?></td>
            <td><?php echo $row['class'];?></td>
            <td><?php echo $row['lecturer'];?></td>
            <td><?php echo $row['timedate']?></td>
            <td><?php echo $row['timefrom'];?></td>
            <td><?php echo $row['timeto'];?></td>
            <td><?php echo $row['venue'];?></td>


            </tr>
            <?php
        }

        ?>
        </tbody>
    </table>

</div>
<footer class="footer-distributed" style="background-color: #080c33">

    <div class="footer-left">
        <h3>VISION<span>Institute</span></h3>

        <p class="footer-links">
            <a href="#">Home</a>
            |
            <a href="#">Lecturers</a>
            |
            <a href="#">About</a>
            |
            <a href="#">Contact</a>


        </p>

        <p class="footer-company-name">Copyright © 2022 <strong>VISION</strong> All rights reserved</p>

        <div class="mapouter" style="padding-top: 10px"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style></style><a href="https://www.embedgooglemap.net">google iframe map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:300px;}</style></div></div>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Rathnapura</span>
                Sri Lanka</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+94 4555555555</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:sagar00001.co@gmail.com">vision2022@gmail.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About the company</span>
            <strong>VISION</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore esse est id quod ut. Adipisci, asperiores atque deserunt dolore eius eos, ipsam laboriosam, laborum laudantium obcaecati quisquam soluta ullam voluptas.
        </p>
        <div class="footer-icons">
            <a href="#"style="padding-top: 10px" ><i class="fa fa-facebook"></i></a>
            <a href="#"style="padding-top: 10px"><i class="fa fa-instagram"></i></a>
            <a href="#"style="padding-top: 10px"><i class="fa fa-linkedin"></i></a>
            <a href="#"style="padding-top: 10px"><i class="fa fa-twitter"></i></a>
            <a href="#"style="padding-top: 10px"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</footer>
</body>
</html>
