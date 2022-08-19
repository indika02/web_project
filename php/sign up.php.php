<?php
include_once ('link.php');
require_once ('db_connect.php');
?>
    <link rel="stylesheet" href="../css/signup.css">
<?php
session_start();
?>
?>
<?php
    if(isset($_POST['submit'])){

        $errors=array();
        if(!isset($_POST['uname'])|| strlen(trim($_POST['uname']))<1){
            $errors[]='Username is Missing/Invalid';
        }
        if(!isset($_POST['pwd'])|| strlen(trim($_POST['pwd']))<1){
            $errors[]='Password is Missing/Invalid';
        }
        if (empty($errors)){
            $uname=mysqli_real_escape_string($conn,$_POST['uname']);
            $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
            $hashed_pwd=sha1($pwd);

            $query="SELECT * FROM users WHERE username='{$uname}' AND password='{$hashed_pwd}' LIMIT 1";

            $resultset=mysqli_query($conn,$query);


            if ($resultset){
                if(mysqli_num_rows($resultset)==1){

                    $user=mysqli_fetch_assoc($resultset);
                    $_SESSION['u_id']=$user['id'];
                    $_SESSION['name']=$user['name'];

                    header('Location:./admin.php');
                }else{
                    $errors='Invalid Username/password';

                }
            }

        }
    }
?>
<head>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<div class="container">
    <div class="row content">

        <div class="col-md-6 mb-3">
            <img src="../img/iStock-507009337-171002.png" class="img-fluid" alt="image">
        </div>
        <div class="col-md-6">
            <h3 class="signin-text mb-3">Sign in</h3>

            <form action="sign up.php.php" method="POST" >
                <?php
                if (isset($errors)&&!empty($errors)){
                    echo "<p class='error' style='display:none'>Inavalid Username or Password!</p>";
                }

                ?>

                <div class="form-group">
                    <label for="text">Username</label>
                    <input type="uname" name="uname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" name="pwd" class="form-control">
                </div>
                <button class="btn btn-primary" name="submit" onClick="clearform();">Login</button>
                <button class="btn btn-danger" name="submit;"style="float: right"><a class="logout" href="index.html"  style="text-decoration: none;color: white;">Cancel</button>
                <br>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    <script src="../js/index.js"></script>

</script>
</body>
</html>
<?php
mysqli_close($conn);
?>