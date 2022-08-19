<?php
include_once ('db_connect.php');
include_once ('link.php');

include_once ('delete.php');

session_start();
?>

<?php
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $telno=$_POST['telno'];
    $email=$_POST['email'];
    $g_name=$_POST['g_name'];
    $g_telno=$_POST['g_telno'];


    $conn=mysqli_connect("localhost","root","","system");


    if (!$conn){
        echo "Erro occured";
    }else{
        echo "success";
        $query = "INSERT INTO student VALUES ('$id','$name','$address','$telno','$email','$g_name','$g_telno')";
        if (mysqli_query($conn,$query)){

        }
    }
}



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/admin.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h4>ADMIN Dashboard</h4>
        </div>

        <ul class="list-unstyled components">
            <p>Dummy Heading</p>

            <li>
                <a href="./admin.php">Home</a>
            </li>
            <li>
                <a href="./registration.php">Registration</a>
            </li>
            <li>
                <a href="#">Timetable</a>
            </li>
            <li>
                <a href="#">Calculation</a>
            </li>
        </ul>


    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right">
            <i class="fas fa fa-plus"></i> Enroll student
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="home.php" method="post" style="font-size: 13px;">
                            <div class="form-group row">
                                <label for="inputid" class="col-sm-2 col-form-label" >Enrollment No</label>
                                <div class="col-sm-10">
                                    <input type="text"class="form-control" name="id" required ></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text"class="form-control" name="name" required></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputaddress" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text"class="form-control" name="address" required></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtelno" class="col-sm-2 col-form-label">Tel No</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"name="telno" required></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputemail" class="col-sm-2 col-form-label">Email Address</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control"name="email" required></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputpname" class="col-sm-2 col-form-label">Guardian's Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"name="g_name"></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ptelno" class="col-sm-2 col-form-label">Guardian's Tel No</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="g_telno"></input>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-primary"name="submit" value="submit"></input>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <caption><p style="font-size: 30px;text-align: center;">Student Information</p></caption>

        <table class="table table-border">
            <thead>
            <tr style="font-size: 15px;">
                <th scope="col">Enrollment No</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Tel No</th>
                <th scope="col">Email</th>
                <th scope="col">Parent's Name</th>
                <th scope="col">Parent's Tel No</th>
                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
            <?php

            $sql="SELECT * FROM student";
            $query=$conn->query($sql);

            while($row=$query->fetch_assoc()){
                ?>
                <tr style="font-size: 15px;" >
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['telno'];?></td>
                    <td><?php echo $row['email'];?></td>

                    <td><?php echo $row['g_name'];?></td>
                    <td><?php echo $row['g_telno'];?></td>

                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row ['id']?>">
                        <td scope="col"><input type="submit" name="delete" class="btn btn-danger" value="DELETE"> </td>
                    </form>
                </tr>
                <?php
            }
            ?>

    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
</body>

</html>