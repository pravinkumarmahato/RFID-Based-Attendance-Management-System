<?php
    require("includes/common.php");
    if(isset($_SESSION['email']))
    {
        $eid = $_SESSION['email'];
        $query = "SELECT card_uid FROM student WHERE email='$eid'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $uid = $row["card_uid"];
            }
        } else {
              echo "0 results";
            }
            mysqli_close($conn);
    }
    else
    {
        echo "<script>alert(\"Invalid Student username or password\")</script>";
        header("Location: student-login.php");
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
					<li><a href="student-index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="Attendence.php"><span class="glyphicon glyphicon-list-alt"></span> Attendence</a></li>
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
                                            require("includes/common.php");
                                            $sql = "SELECT * FROM student_attendence WHERE card_uid = '$uid'";
                                            $res = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0)
                                            {
                                                while($row = mysqli_fetch_assoc($res))
                                                {
                                                    echo '<tr>';
												    echo '<td>'. $row['id'] . '</td>';
                                                    echo '<td>'. $row['card_uid'] . '</td>';
												    echo '<td>'. $row['date'] . '</td>';
												    echo '<td>'. $row['time'] . '</td>';
                                                    echo '</tr>';
                                                }
                                            }
                                            mysqli_close($conn);
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