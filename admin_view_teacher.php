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
    $sql="SELECT * FROM teacher";
    $result=mysqli_query($data,$sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>
        <link rel="stylesheet"  type="text/css" href="admin.css">
<?php
        include'admin_css.php';

        ?>

        <style type="text/css">
          .table_th
          {
            padding: 20px;
            font-size: 20px;

          }
           .table_td
          {
            padding: 20px;
            background-color: skyblue;

          }
          .Teacher
          {
            width: 30px;
            height: 40px;
          }



        </style>

        
    </head>
    <body>
        <?php
        include'admin_sidebar.php';

        ?>

        <div class="content">
            <center>
            <h1>View All Teachers</h1>
            <table border="2px">
                <tr>
                    <th class="table_th">Teacher Name</th>
                    <th class="table_th">About Teacher</th>
                    <th class="table_th">Image</th>
                </tr>
                <?php
                while($info=$result->fetch_assoc())
                {

            
                ?>
                <tr>
                    <td class="table_td">
                        <?php echo"{$info['name']}"?>
                    </td>
                    <td class="table_td">
                        <?php echo"{$info['description']}"?>
                    </td>
                    <td class="table_td">
                        <img class="Teacher" src ="Teacher1.jpg">
                    </td>
                </tr>
                <?php
                 }

                ?>
            </table>
            </center>
            
        </div>
    </body>
</html>