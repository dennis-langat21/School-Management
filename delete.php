<?php

session_start();
$host="localhost";
$user="root";
$password="";
$db="schoolmanagementsystem";

$data=mysqli_connect($host,$user,$password,$db);

if($_GET['student_id'])
{
    $id=$_GET['student_id'];
    $sql="DELETE FROM user WHERE id='$id'";
    $result=mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['message']='Delete student successful';
        header("location:view_student.php");
    }
}




?>