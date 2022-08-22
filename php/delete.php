<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'system');

if (isset($_POST['delete'])){
    $id=$_POST['id'];

    $query="DELETE FROM student WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);

    if ($query_run){
        echo '<script> alert("Data Deleted");</script>';
        header("Location:registration.php");
    }else{
        echo '<script> alert("Data not Deleted");</script>';
    }
}
?>
<?php
if (isset($_POST['delete'])){
    $class_id=$_POST['class_id'];

    $query="DELETE FROM class WHERE class_id='$class_id'";
    $query_run=mysqli_query($conn,$query);

    if ($query_run){
        echo '<script> alert("Data Deleted");</script>';
        header("Location:calculation.php");
    }else{
        echo '<script> alert("Data not Deleted");</script>';
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
