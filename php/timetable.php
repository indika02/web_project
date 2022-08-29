<?php
include_once ('db_connect.php');
include_once ('link.php');

include_once ('delete.php');

session_start();
?>
<?php
if(isset($_POST['submit'])){
    $t_id=$_POST['t_id'];
    $date=$_POST['date'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $venue=$_POST['venue'];
    $class_id=$_POST['class_id'];
    $sec_id=$_POST['sec_id'];

    $conn=mysqli_connect("localhost","root","","system");


    if (!$conn){
        echo "Erro occured";
    }else{

        $query = "INSERT INTO timetable(t_id,timedate,timefrom,timeto,venue,class_id,sec_id) VALUES ('$t_id','$date','$from','$to','$venue','$class_id','$sec_id')";
        if (mysqli_query($conn,$query)){

        }

    }
}



?>
<?php
if (isset($_POST['delete'])){
    $t_id=$_POST['t_id'];

    $query="DELETE FROM timetable WHERE t_id='$t_id'";
    $query_run=mysqli_query($conn,$query);

    if ($query_run){
        echo '<script> alert("Data Deleted");</script>';
        header("Location:timetable.php");
    }else{
        echo '<script> alert("Data not Deleted");</script>';
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title></title>

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
    <nav id="sidebar" style="background-color: #080c33">
        <div class="sidebar-header" style="background-color: #3F71EA">
            <h4><?php echo"{$_SESSION['name']}"?></h4>
        </div>

        <ul class="list-unstyled components">


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
                <a href="./calculation.php">Class</a>
            </li>
            <li>
                <a href="./comments.php">Comments</a>
            </li>
        </ul>


    </nav>

    <!-- Page Content  -->
    <div id="content">
        <button type="button" id="sidebarCollapse" class="btn btn-secondary">
            <i class="fas fa-align-justify"></i>
        </button>
        <button class="btn btn-dark" style="float:right;"><a href="./sign up.php.php">LOGOUT</a></button>
        <div class="mod" style="padding-top: 20px">

            <caption><p style="font-size: 30px;text-align: center;">Class</p></caption>

            <table class="table table-bordered">
                <thead>
                <tr style="font-size: 15px;">
                    <th scope="col">ID</th>
                    <th scope="col">Class</th>
                    <th scope="col">Lecturer</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $sql="SELECT * FROM class";
                $query=$conn->query($sql);

                while($row=$query->fetch_assoc()){
                    ?>
                    <tr style="font-size: 15px;" >
                        <td><?php echo $row['class_id'];?></td>
                        <td><?php echo $row['class'];?></td>
                        <td><?php echo $row['lecturer'];?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
<hr style="background-color: black">

            <caption><p style="font-size: 30px;text-align: center;">Timetable</p></caption>
            <div class="mod" style="padding-top: 20px">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right">
                    <i class="fas fa fa-plus"></i> UPDATE
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

                                <form action="timetable.php" method="post" style="font-size: 13px;">
                                    <div class="form-group row">
                                        <label for="inputname" class="col-sm-2 col-form-label">ID</label>
                                        <div class="col-sm-10">
                                            <input type="text"class="form-control" name="t_id" required></input>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputaddress" class="col-sm-2 col-form-label">Class_ID</label>
                                        <div class="col-sm-10">
                                            <input type="text"class="form-control" name="class_id" required></input>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputaddress" class="col-sm-2 col-form-label">Section</label>
                                        <div class="col-sm-10">
                                            <input type="text"class="form-control" name="sec_id" required></input>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtelno" class="col-sm-2 col-form-label">Date</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control"name="date" required></input>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputemail" class="col-sm-2 col-form-label">From</label>
                                        <div class="col-sm-10">
                                            <input type="time" class="form-control"name="from" required></input>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputpname" class="col-sm-2 col-form-label">To</label>
                                        <div class="col-sm-10">
                                            <input type="time" class="form-control"name="to"></input>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ptelno" class="col-sm-2 col-form-label">Venue</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="venue"></input>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float: left">Cancel</button>
                                    <input type="submit" class="btn btn-primary"name="submit" value="submit" style="float: right"></input>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <table class="table table-bordered" style="padding-top: 50px">
                    <thead>
                    <tr style="font-size: 15px;">
                        <th scope="col">ID</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Class</th>
                        <th scope="col">Date</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Venue</th>
                        <th scope="col">Action</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php
//                lect t_id,class.class,class.lecturer,timedate,timefrom,timeto,venue,sec_id FROM timetable,class WHERE t_id=$t_id AND class.class_id=$class_id");
$sql="select * From timetable";
                    $query=$conn->query($sql);

                    while($row=$query->fetch_assoc()){
                        ?>
                            <td><?php echo $row['t_id'];?></td>
                            <td><?php echo $row['sec_id'];?></td>
                            <td><?php echo $row['class_id'];?></td>
                            <td><?php echo $row['timedate']?></td>
                            <td><?php echo $row['timefrom'];?></td>
                            <td><?php echo $row['timeto'];?></td>
                            <td><?php echo $row['venue'];?></td>

                            <form action="delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row ['t_id']?>">
                                <td scope="col"><input type="submit" name="delete" class="btn btn-danger" value="DELETE"> </td>
                            </form>
                        </tr>
                        <?php
                    }

                    ?>
                    </tbody>
                </table>
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
