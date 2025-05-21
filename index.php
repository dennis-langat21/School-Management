<?php
    error_reporting(0);
    session_start();
    session_destroy();
    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];
        echo "<script type='text/javascript'>
        alert('$message');
        </script>";
    }
    $host="localhost";
    $user="root";
    $password="";
    $db="schoolmanagementsystem";

    $data=mysqli_connect($host,$user,$password,$db);

    $sql="SELECT * FROM teacher";

    $result=mysqli_query($data,$sql);


?>





<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" 
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

    <nav>
        <label class="logo">Angaza School</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class ="btn btn-success">Login</a></li>
        </ul>
    </nav>
    <div class="section1">
        <label class="img_text">Lighting the society through education</label>
        <img class="main_img" src="complex.jpg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="School.jpg"> 

            </div>
            <div class="col-md-8">
                <h1>Welcome to Angaza School</h1>
                <p>Angaza School is a visionary educational institution committed to nurturing 
                    young minds through holistic, innovative, and inclusive learning. Our mission
                    is to provide a supportive environment where students thrive academically, socially,
                    and emotionally. With a strong emphasis on critical thinking, creativity, and character
                    development, Angaza School aims to empower future leaders who are not only knowledgeable
                    but also compassionate and globally minded. Through modern teaching approaches, 
                    well-equipped facilities, and a dedicated team of educators, we strive to make 
                    learning meaningful and transformative for every child.</p>

            </div>

        </div>
    </div>
    <center>
        <h1>Our Teachers</h1>
    </center>
    <div class="container">
        <div class="row">
            <?php
            while($info=$result->fetch_assoc())
            {

                ?>

            <div class ="col-md-4">
                <img class="Teacher" src ="Teacher1.jpg">
                
                <h5></h5> <?php echo"{$info['description']}"?></h5>
                <p>Welcome to Angaza School, where your experience and passion 
                    will help shape not only a strong academic culture but also 
                    a caring and inclusive environment. Your leadership is key 
                    as we build a school that inspires excellence and integrity.
                    We’re proud to have you on this journey.</p>

            </div>
            <?php

            }
            ?>

        </div>
    </div>

    <center>
        <h1>Our Courses</h1>
    </center>
    <div class="container">
        <div class="row">
            
           
            <div class ="col-md-4">
                <img class="Course" src ="course1.jpg">
                <h3>Graphic Design</h3>

            </div>
            <div class ="col-md-4">
                <img class="Course" src ="course2.jpg">
                <h3>Tourism and Hospitality</h3>

            </div>
            <div class ="col-md-4">
                <img class="Course" src ="course3.jpg">
                <h3>Geography and Habitation</h3>
            </div>

            

        </div>
    </div>

    <center>
        <h1 class="adm">Admission Form</h1>
    </center>

    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_des" type="text" name="name">
            </div>

            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_des" type="text" name="email">
            </div>

            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_des" type="text" name="phone">
            </div>

            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>

            <div class="adm_int">
                <input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
            </div>
        </form>

    </div>
    <footer>
        <h3 class="footer_txt">All @copyright reserved by Kwechi</h3>
    </footer>

</body>
</html>