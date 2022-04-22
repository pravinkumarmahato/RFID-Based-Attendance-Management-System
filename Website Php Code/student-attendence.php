<?php
    require("includes/common.php");
    if(!isset($_SESSION['email']))
    {
        echo "<script>alert(\"Invalid Student username or password\")</script>";
        header("Location: admin-login.php");
    }

    require 'database.php';
    $card_uid = null;
    if ( !empty($_GET['card_uid'])) {
        $card_uid = $_REQUEST['card_uid'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Attendence</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="admin_index.php">KC BSc. IT (TEAM-2)</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
					<li><a href="admin_index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="user data.php"><span class="glyphicon glyphicon-list-alt"></span> Students Data</a></li>
					<li><a href="registration.php"><span class="glyphicon glyphicon-save-file"></span> Registration</a></li>
					<li><a href="read tag.php"><span class="glyphicon glyphicon-credit-card"></span> Read Card</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
                </div>
            </div>
        </div><br><br><br>

        <div id="content">
            <div class="container-fluid decor_bg " >
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-primary" style="opacity: 0.9;">
                            <div class="panel-heading" style="background-color:#;">
                                <center>
                                    <h4>Attendence Sheet</h4>
                                </center>
                            </div>
                            <div class="panel-body" >
							    <table class="table table-striped table-bordered">
							        <thead>
                   		                <tr bgcolor="#10a0c5" color="#FFFFFF">
                                            <th>ID</th>
                                            <th>Card UID</th>
                                            <th>Checking Date</th>
                                            <th>Time</th>
                    		            </tr>
									</thead>
									<tbody>
									    <?php
                                            $pdo = Database::connect();
                                            $sql = "SELECT * FROM student_attendence where card_uid = '$card_uid'";
                                            foreach ($pdo->query($sql) as $row) {
												echo '<tr>';
												echo '<td>'. $row['id'] . '</td>';
                                                echo '<td>'. $row['card_uid'] . '</td>';
												echo '<td>'. $row['date'] . '</td>';
												echo '<td>'. $row['time'] . '</td>';
                                                echo '</tr>';
                                            }
											Database::disconnect();
										?>
                					</tbody>
								</table>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>