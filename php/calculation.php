<?php
include_once ('db_connect.php');
include_once ('link.php');

include_once ('delete.php');

session_start();
?>

<?php
if(isset($_POST['submit'])){
    $class_id=$_POST['class_id'];
    $class=$_POST['class'];
    $lecturer=$_POST['lecturer'];


    $conn=mysqli_connect("localhost","root","","system");


    if (!$conn){
        echo "Erro occured";
    }else{

        $query = "INSERT INTO class(class_id,class,lecturer) VALUES (DEFAULT,'$class','$lecturer')";
        if (mysqli_query($conn,$query)){

        }
        header('Location:calculation.php');
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
    <nav id="sidebar">
        <div class="sidebar-header">
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
                <a href="./timetable.php">Timetable</a>
            </li>
            <li>
                <a href="./calculation.php">Calculation</a>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right">
                <i class="fas fa fa-plus"></i> Add class
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add the Class</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="calculation.php" method="post" style="font-size: 13px;">
                                <div class="form-group row">
                                    <label for="inputid" class="col-sm-2 col-form-label" >Class</label>
                                    <div class="col-sm-10">
                                        <input type="text"class="form-control" name="class" required ></input>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">Lecturer</label>
                                    <div class="col-sm-10">
                                        <input type="text"class="form-control" name="lecturer" required></input>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float:left">Cancel</button>
                                <input type="submit" class="btn btn-primary"name="submit" value="submit"  style="float:right"></input>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <caption><p style="font-size: 30px;text-align: center;">Class</p></caption>

            <table class="table table-border">
                <thead>
                <tr style="font-size: 15px;">
                    <th scope="col">ID</th>
                    <th scope="col">Class</th>
                    <th scope="col">Lecturer</th>
                    <th scope="col">Action</th>
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

                        <form action="delete.php" method="post">
                            <input type="hidden" name="class_id" value="<?php echo $row ['class_id']?>">
                            <td scope="col"><input type="submit" name="delete" class="btn btn-danger" value="DELETE"> </td>
                        </form>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <hr>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal" style="float: right">
            <i class="fas fa fa-plus"></i> Add class
        </button>
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add the Class</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action=".php" method="post" style="font-size: 13px;">
                            <div class="form-group row">
                                <label for="inputid" class="col-sm-2 col-form-label" >Class</label>
                                <div class="col-sm-10">
                                    <input type="text"class="form-control" name="class" required ></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputid" class="col-sm-2 col-form-label" >Class</label>
                                <div class="col-sm-10">
                                    <input type="text"class="form-control" name="class" required ></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputid" class="col-sm-2 col-form-label" >Class</label>
                                <div class="col-sm-10">
                                    <input type="text"class="form-control" name="class" required ></input>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float:left">Cancel</button>
                            <input type="submit" class="btn btn-primary"name="submit" value="submit"  style="float:right"></input>
                        </form>
                    </div>
                </div>
            </div>
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
