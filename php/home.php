<?php
include_once ('db_connect.php');
include_once ('link.php');
include_once ('registerstd.php');
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&family=Poppins:wght@300&family=Raleway&family=Rubik&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: Poppins, sans-serif;

        }
        ul.tablinks {
            list-style: none;
            margin: 10px 0 0 10px;
            padding: 0;
            display: inline-block;

        }
        ul.tablinks li {
            display: inline;
            padding: 10px 20px;
            background: #eee;
            font-weight: bold;
            box-shadow: 2px 0 2px #aaa;
            border-radius: 4px;
        }
        ul.tablinks li.active {
            color: white;
            background: #859085;
        }
        .hide {
            display: none;
        }
        .show {
            display: block;
        }
        .tabcontainer {
            margin: 10px;
            padding: 0 10px;
        }


        #tabcontent-2{
            text-align: center;
        }

        form{
            font-size: 15px;
        }
        .topic{
            font-family: "Times New Roman";
            font-size: 30px;
            font-weight: bold;
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <p class="topic"><i>VISION</i> Higher Education Institute</p>
    <p style="font-size: 25px;padding-left: 850px; padding-top: 10px"><?php echo"{$_SESSION['name']}"?></p>
    <button class="btn btn-primary"><a href="./sign up.php.php"><i class="fa fa-sign-out" aria-hidden="true" style="color: white;font-size: 25px"></i></a></button>
</nav>

<ul class="tablinks">
    <li id="tab-1" onclick="showTab(1);" class="active">Home</li>
    <li id="tab-2" onclick="showTab(2);">Registration</li>
    <li id="tab-3" onclick="showTab(3);">Class Fee</li>

</ul>


<div class="tabcontainer">

    <div id="tabcontent-1" class="show">
        <caption><p style="font-size: 30px;text-align: center;">Student Information</p></caption>
        <table class="table table-border" style="padding-bottom: 500px">

            <thead class="thead-dark">
            <tr>
                <th scope="col">Enrollment No</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Tel No</th>
                <th scope="col">Email</th>
                <th scope="col">Parent's Name</th>
                <th scope="col">Parent's Tel No</th>

            </tr>
            </thead>
            <tbody>
            <?php

            $sql="SELECT * FROM student";
            $query=$conn->query($sql);

            while($row=$query->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['telno'];?></td>
                    <td><?php echo $row['email'];?></td>

                    <td><?php echo $row['g_name'];?></td>
                    <td><?php echo $row['g_telno'];?></td>

                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

    </div>


    <div id="tabcontent-2" class="hide">
        <!-- Button trigger modal -->
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

                        <form action="registered.php" method="post">
                            <div class="form-group row">
                                <label for="inputid" class="col-sm-2 col-form-label">Enrollment No</label>
                                <div class="col-sm-10">
                                    <input type="text"class="form-control" name="id" required></input>
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
            <thead class="thead-dark">
        <tr>
            <th scope="col">Enrollment No</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Tel No</th>
            <th scope="col">Email</th>
            <th scope="col">Parent's Name</th>
            <th scope="col">Parent's Tel No</th>

        </tr>
        </thead>
        <tbody>
        <?php

        $sql="SELECT * FROM student";
        $query=$conn->query($sql);

        while($row=$query->fetch_assoc()){
          ?>
            <tr>
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

    <div id="tabcontent-3" class="hide">
        <h2>Tab 3</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam consequatur suscipit temporibus sunt quibusdam at, itaque nisi, et perspiciatis, dolores quam sint facilis quos culpa saepe, minima beatae a deleniti.</p>
        <p>Cum, voluptatum. Corporis minima adipisci aspernatur totam officia dolores, alias commodi vel facere iusto explicabo, magnam! Tempore veniam nisi perferendis, asperiores delectus voluptates. Doloribus porro quos aperiam dignissimos adipisci rerum.</p>
        <p>Commodi, excepturi, sit. Asperiores temporibus nostrum, esse impedit mollitia excepturi soluta dignissimos repellat maxime voluptate, natus cumque provident magnam? Soluta ipsum explicabo quibusdam fuga ratione similique voluptatibus, dolor adipisci laborum.</p>
    </div>
</div>
</div>


</body>


</html>

<script>

    function showTab(tabNumber) {
        console.log(tabNumber);
        document.getElementsByClassName("show")[0].classList.add("hide");
        document.getElementsByClassName("show")[0].classList.remove("show");
        document.getElementById("tabcontent-" + tabNumber).classList.add("show");
        document.getElementById("tabcontent-" + tabNumber).classList.remove("hide");
        document.getElementsByClassName("active")[0].classList.remove("active");
        document.getElementById("tab-" + tabNumber).classList.add("active");

    }


</script>

