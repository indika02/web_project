<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'system');

if (isset($_POST['delete'])){
    $id=$_POST['id'];

    $query="DELETE FROM student WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);

    if ($query_run){
        echo '<script> alert("Data Deleted");</script>';
        header("Location:home.php");
    }else{
        echo '<script> alert("Data not Deleted");</script>';
    }
}
?>