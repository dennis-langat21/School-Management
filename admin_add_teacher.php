<?php
session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }
    elseif($_SESSION['usertype']=='student')
    {
        header("location:login.php");
    }
    $host="localhost";
    $user="root";
    $password="";
    $db="schoolmanagementsystem";

    $data=mysqli_connect($host,$user,$password,$db);

    if(isset($_POST['add_teacher']))
    {
        $t_name=$_POST['name'];
        $t_de=$_POST['description'];
       

        $sql="INSERT INTO teacher (name,description) VALUES('$t_name','$t_de')";

        $result=mysqli_query($data,$sql);

        if($result)
        {
            header("location:admin_add_teacher.php");
        }
    }
?>
    

    

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>
        <link rel="stylesheet"  type="text/css" href="admin.css">

        <style type="text/css">
            .div_des
            {
                background-color: skyblue;
                padding-top:70px ;
                padding-bottom:70px ;
                width: 500px;

            }

        </style>
<?php
        include'admin_css.php';

        ?>

        
    </head>
    <body>
        <?php
        include'admin_sidebar.php';

        ?>

        <div class="content">
            <center>
            <h1>Add Teacher</h1>
            <br><br>
            <div class="div_des">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div>
                    <label>Teacher Name:</label>
                    <input type="text" name="name">

                </div>
                <br>
                <div>
                    <label>Description:</label>
                    <textarea name="description"></textarea>

                </div>
                <br>
                <div>
                    <label>Image:</label>
                    <input type="file" name="image">

                </div>
                <br>
                <div>
                    
                    <input class="btn btn-primary" type="submit" name="add_teacher" value="add teacher">

                </div>
            </form>
            </div>


            </center>
            
        </div>
    </body>
</html>