<?php
    require("includes/common.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Profile Page</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
        <style>
            img {
              border-radius: 50%;
            }
            table {
                table-layout: fixed;
                width: 200px;
                background-color: white;
            }
            tr{
                height: 50px;
                border: 1px solid white;
                background-color: white;
            }
            td, tbody{
                border: 1px solid white;
                background-color: white;
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">KC BSc. IT (TEAM-2)</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
					    <li><a href="admin-profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
					    <li><a href="student-attendence.php"><span class="glyphicon glyphicon-user"></span> Attendence</a></li>
				    	<li><a href="user data.php"><span class="glyphicon glyphicon-user"></span> User Data</a></li>
				    	<li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Registration</a></li>
				    	<li><a href="read tag.php"><span class="glyphicon glyphicon-user"></span> Read Card</a></li>
				    	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			    	</ul>
                </div>
            </div>
        </div>
        <center>
            <div style="padding-top: 100px;">
                <img src="img/img_avatar.png" alt="Avatar" style="width:200px">
            </div><br><br>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-borderless">
                        <tbody>
                        <?php
                        include 'database.php';
                        $pdo = Database::connect();
                        $email = $_SESSION['email'];
                        $sql = "SELECT * FROM admin WHERE email='$email'";
                        foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>ID</td>';
                            echo '<td>'. $row['id'] . '</td>';
                            echo '</tr>';
                            echo '<tr>';
                            echo '<td>Name</td>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '</tr>';
							echo '<td>Email</td>';
							echo '<td>'. $row['email'] . '</td>';
                            echo '</tr>';
                        }
                        Database::disconnect();
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </center>
    </body>
</html>