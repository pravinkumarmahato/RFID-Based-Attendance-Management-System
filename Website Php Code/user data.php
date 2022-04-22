<?php
    require("includes/common.php");
    if(!isset($_SESSION['email']))
    {
        echo "<script>alert(\"Invalid Student username or password\")</script>";
        header("Location: admin-login.php");
    }

	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
		<title>Student Details</title>
	</head>
	<body>
	<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="admin_index.php">KC BSc. IT (TEAM-2)</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
					<li><a href="admin-index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="user data.php"><span class="glyphicon glyphicon-list-alt"></span> Students Data</a></li>
					<li><a href="registration.php"><span class="glyphicon glyphicon-save-file"></span> Registration</a></li>
					<li><a href="read tag.php"><span class="glyphicon glyphicon-credit-card"></span> Read Card</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
                </div>
            </div>
        </div>
		<br><br><br>

		<div id="content">
            <div class="container-fluid decor_bg " >
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-primary" style="opacity: 0.9;">
                            <div class="panel-heading" style="background-color:#;">
                                <center>
                                    <h4>User Data Table</h4>
                                </center>
                            </div>
                            <div class="panel-body" >
							    <table class="table table-striped table-bordered">
							        <thead>
                   		                <tr bgcolor="#10a0c5" color="#FFFFFF">
											<th>ID</th>
											<th>Name</th>
										    <th>Gender</th>
										    <th>Email</th>
										    <th>Phone</th>
										    <th>Class</th>
										    <th>Dept.</th>
										    <th>Card UID</th>
										    <th>Reg. Date</th>
										    <th>Action</th>
                    		            </tr>
									</thead>
									<tbody>
									    <?php
                  		                    include 'database.php';
											$pdo = Database::connect();
											$sql = 'SELECT * FROM student ORDER BY id ASC';
											foreach ($pdo->query($sql) as $row) {
												echo '<tr>';
												echo '<td>'. $row['id'] . '</td>';
												echo '<td>'. $row['name'] . '</td>';
												echo '<td>'. $row['gender'] . '</td>';
												echo '<td>'. $row['email'] . '</td>';
												echo '<td>'. $row['phone'] . '</td>';
												echo '<td>'. $row['class'] . '</td>';
                       						    echo '<td>'. $row['dept'] . '</td>';
												echo '<td>'. $row['card_uid'] . '</td>';
												echo '<td>'. $row['registration_date'] . '</td>';
												echo '<td><center><a class="btn btn-primary" href="user data edit page.php?id='.$row['id'].'">Edit</a>';
												echo '    ';
												echo '<a class="btn btn-danger" href="user data delete page.php?id='.$row['id'].'">Delete</a>';
												echo '<a class="btn btn-success" href="student-attendence.php?card_uid='.$row['card_uid'].'">Attendence</a><br>';
												echo '</center></td>';
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