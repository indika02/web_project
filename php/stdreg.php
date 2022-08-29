<?php
if(isset($_POST['enroll'])){
    $std_id=$_POST['std_id'];
    $c_id=$_POST['c_id'];



    $conn=mysqli_connect("localhost","root","","system");


    if (!$conn){
        echo "Erro occured";
    }else{
        echo "Connected";
        $query = "INSERT INTO student_class(id,class_id) VALUES ('$std_id','$c_id')";
        if (mysqli_query($conn,$query)){

        }
        header('Location:calculation.php');
    }
}
?>
