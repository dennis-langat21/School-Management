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
        
    </head>
    <body>
        <?php
        include 'student_update.php'

        ?>
        <div class="content">
            <h1>Overview of Angaza School</h1>
            <p>Manage, monitor, and empower your school community with ease.
               Use this dashboard to oversee users, streamline academic 
               operations, track finances, and support excellence in education.</p>
              
        </div>
    </body>
</html>