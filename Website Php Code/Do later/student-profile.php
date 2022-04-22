<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Profile Page</title>
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
        <center>
            <div style="padding-top: 90px;">
                <img src="img/img_avatar.png" alt="Avatar" style="width:200px">
            </div><br>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Class</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Card UID</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Mobile No.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Registration Date</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </center>
    </body>
</html>