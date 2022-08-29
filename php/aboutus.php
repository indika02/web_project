<?php
include_once ('link.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/footer.css">
    <style>
        #vm{
            font-weight: bold;
            text-align: center;
            font-size: 45px;
            color: #1c2286;

        }
        #vmd{
            font-weight: bold;
            text-align: center;
            font-size: 20px;

        }
        #progress{
            background-color: #1c2286;
            height: 300px;
            padding-top: 20px;
        }
        #progress h3{
            font-size: 40px;
            color: white;
            padding-top: 30px;
        }

        #progress p{
            font-size: 20px;
            color: white;
            padding-top: 10px;
            font-weight: bold;
        }

        #gallery{
            padding-top: 50px;
        }
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 66px;
            text-align: center;
            font-weight: bold;
            color: #1623ea;
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
                    <a class="nav-link" style="color:#080c33;" href="team.php">LECTURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#080c33" href="#section1">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#080c33" href="./notices.php">TIMETABLE</a>
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
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../img/5%20(1).jpg" alt="First slide" style="width: 100%;height: 500px;opacity: 1.9">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../img/course_img.jpg" alt="Second slide" style="width: 100%;height: 500px;opacity: 1.9">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../img/placement-test-main.jpg" alt="Third slide" style="width: 100%;height: 500px;opacity: 1.9">
        </div>
    </div>
    <div class="center">
        <p>Learning From the <p style="color: yellow">Best Lecturers</p></p>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="col" style="padding-top: 30px">
    <h3 id="vm">VISION</h3>
    <p id="vmd">To spearhead the transformation of the nation’s sons and daughters as<br> competent and virtuous citizens via holistic education.</p>
    <h3 id="vm">MISSION</h3>
    <p id="vmd">A generation endowed with wisdom and virtue.</p>
</div>
<section id="progress">
    <div class="container">
    <div class="col">
        <h3>Our Progress</h3>
        <P>Students of Vision have secured the first place in the Commerce Stream in the Advanced Level Examination in Sri lanka continuously for the last seventeen years. During this period, Sipwin students have been able to secured first place in the Island in the Commerce Stream for two times. Sipwin institute has also the highest percentage of students entering Universities in Kurunegala District. In addition, there are many students who have won prizes in other professional courses such as Chartered Accountancy, AAT etc.</P>
    </div>
    </div>
</section>
<section id="gallery">
    <div class="container">
    <div class="row">
        <div class="col">
            <img style=" width:100%;max-width:250px;height:100%;max-height: 170px;"id="stream" src="../img/Ninaro-Matara-Hall-3-scaled.jpg">
        </div>
        <div class="col">
            <img style=" width:100%;max-width:250px;height:100%;max-height: 170px;"id="stream" src="../img/5%20(1).jpg">
        </div>
        <div class="col">
            <img style=" width:100%;max-width:250px;height:100%;max-height: 170px;"id="stream" src="../img/placement-test-main.jpg">
        </div>
        <div class="col">
            <img style=" width:100%;max-width:250px;height:100%;max-height: 170px;"id="stream" src="../img/Ninaro-Matara-Hall-3-scaled.jpg">
        </div>
    </div>
        <div class="row" style="padding-top: 40px">
            <div class="col">
                <img style=" width:100%;max-width:250px;height:100%;max-height: 170px;"id="stream" src="../img/Ninaro-Matara-Hall-3-scaled.jpg">
            </div>
            <div class="col">
                <img style=" width:100%;max-width:250px;height:100%;max-height: 170px;"id="stream" src="../img/5%20(1).jpg">
            </div>
            <div class="col">
                <img style=" width:100%;max-width:250px;height:100%;max-height: 170px;"id="stream" src="../img/placement-test-main.jpg">
            </div>
            <div class="col">
                <img style=" width:100%;max-width:250px;height:100%;max-height: 170px;"id="stream" src="../img/Ninaro-Matara-Hall-3-scaled.jpg">
            </div>
        </div>
    </div>
</section>
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
