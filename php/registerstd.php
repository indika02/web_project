<?php
require_once ('db_connect.php');
include_once ('home.php');
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



    if (!$conn) {
        echo 'error';
    }else{
        echo 'connected';
        $query = "INSERT INTO student (id,name,address,telno,email,g_name,g_telno) VALUES ('$id','$name','$address','$telno','$email','$g_name','$g_telno')";

        if (mysqli_query($conn,$query)){
echo "submitted";
        }
    }
    header('Location:index.php');
}


?>
