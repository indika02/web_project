<?php
include_once ('link.php');
?>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];


    $conn=mysqli_connect("localhost","root","","system");


    if (!$conn){
        echo "Erro occured";
    }else{

        $query = "INSERT INTO comments(c_id,name,email,comment) VALUES (DEFAULT,'$name','$email','$comment')";
        if (mysqli_query($conn,$query)){

        }
        header('Location:./contact.php');

    }
}



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
        form{
            padding-left: 30px;
            padding-top: 30px;
            width: 1300px;
            padding-right: 50px;
        }
        .form-control{
            width: 800px;
            resize: none;
        }
    .submit{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            width:150px;
            height: 50px;
            border: none;
            background-color: #1a23b9;
            color: white;
            font-weight: bold;
}
    #comment{
        text-align: center;
        font-size: 35px;
        font-weight: bold;
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
<div class="container">
<h3 id="comment">Send Me Your Suggestions</h3>
    <form action="contact.php" method="post" style="font-size: 16px;">
        <div class="form-group row">
            <label for="inputname" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="name" required></input>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputaddress" class="col-sm-2 col-form-label">Email Address</label>
            <div class="col-sm-10">
                <input type="email"class="form-control" name="email" required></input>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputtelno" class="col-sm-2 col-form-label">Comments/Suggestions</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment" required></textarea>
            </div>
        </div>
        <button value="submit" name="submit" class="submit"><i class="fa-solid fa-paper-plane-top"></i>Send</button>

    </form>
</div>
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
