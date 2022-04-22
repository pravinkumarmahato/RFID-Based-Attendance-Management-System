<?php
    require("includes/common.php");

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM student WHERE email='{$email}' AND password='{$password}'";
        $result = mysqli_query($conn,$query);

        if($res=mysqli_fetch_array($result))
        {
            $_SESSION['email'] = $email;
            header("Location: student-index.php");
        }
        else
        {
            echo "<script>alert(\"Invalid Student username or password\")</script>";
            header("Location: student-login.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            #content{
                padding-top:267px;
                padding-bottom:178px;
                min-height: 600px;
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
                        <li><a href = "index.php"><span class = "glyphicon glyphicon-home"></span> Home </a></li>
						<li><a href = "Document.php"><span class = "glyphicon glyphicon-list-alt"></span> Document </a></li>
						<li class="nav-item dropdown float-center">
    						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><span class = "	glyphicon glyphicon-log-in"></span> Login</a>
    						<div class="dropdown-menu" style="color:white; background-color:black">
							<center>
        						<a class="dropdown-item" href="admin-login.php">Admin<br></a>
        						<a class="dropdown-item" href="faculty-login.php">Faculty<br></a>
        						<a class="dropdown-item" href="student-login.php">Student</a>
                            </center>
    						</div>
    					</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="content" style="background: url(img/DN.jpg) no-repeat center center; background-size: cover;">
            <div class="container-fluid decor_bg " id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" style="opacity: 0.9;">
                            <div class="panel-heading" style="background-color:#;">
                                <center>
                                    <h4>STUDENT LOGIN</h4>
                                </center>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Every field is mendetory *</i><p>
                                <form role="form" action="student-login.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <center>
                                        <div class="col-md-8 col-md-offset-2">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Login</button><br>
                                        </div>
                                    </center>
                                </form><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container" align="center">
                <i>Footer Area</i>
            </div>
        </footer>
    </body>
</html>