<?php
session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }
    elseif($_SESSION['usertype']=='admin')
    {
        header("location:login.php");
    }

$host="localhost";
$user="root";
$password="";
$db="schoolmanagementsystem";

$data=mysqli_connect($host, $user, $password, $db);

$name=$_SESSION['username'];
$sql="SELECT * FROM user WHERE username='$name'";

$result=mysqli_query($data,$sql);

$info=mysqli_fetch_assoc($result);

if(isset($_POST['update_profile']))
{
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql1="UPDATE user SET  email='$email',phone='$phone',password='$password' WHERE username='$name'";

    $result1=mysqli_query($data,$sql1);

    if($result1)
    {
        header('location:student_profile.php');
    }
}

    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>
        <link rel="stylesheet"  type="text/css" href="admin.css">

        <?php
        include 'student_css.php'

        ?>
        <style type="text/css">
            label
            {
                display: inline-block;
                text-align: right;
                width: 100px;
                padding-top: 10px;
                padding-bottom: 10px;

            }

            .div_des
            {
                background-color: skyblue;
                width: 500px;
                padding-top: 70px;
                padding-bottom: 70px;
            }
        </style>
        
        
    </head>
    
    <body>
       
        <?php
        include 'student_update.php'

        ?>

        <div class="content">
             <div class="content">
            <h1>Overview of Angaza School</h1>
            <p>Manage, monitor, and empower your school community with ease.
               Use this dashboard to oversee users, streamline academic 
               operations, track finances, and support excellence in education.</p>
              
        </div>
        <center>
            <h1>Update Profile</h1>
            <form action="#" method="POST">
                <div class="div_des">
                
                <div>
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo "{$info['email']}"?>">
                </div>
                <div>
                    <label>Phone</label>
                    <input type="number" name="phone" value="<?php echo "{$info['phone']}"?>">
                </div>
                <div>
                    <label>Password</label>
                    <input type="text" name="password" value="<?php echo "{$info['password']}"?>">
                </div>
                <div>
                   
                    <input type="submit" class="btn btn-primary" name="update_profile" value="update">
                </div>
                </div>
                
                
            </form>
            </center>

        </div>
        
    </body>
</html>