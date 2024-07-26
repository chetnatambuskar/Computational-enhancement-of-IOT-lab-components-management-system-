<?php
// Check if form data is set
if (isset($_POST['name']) && isset($_POST['roll']) && isset($_POST['sem']) && isset($_POST['year']) && isset($_POST['section']) && isset($_POST['mobile']) && isset($_POST['department']) && isset($_POST['regno'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $sem = $_POST['sem'];
    $year = $_POST['year'];
    $section = $_POST['section'];
    $mobile = $_POST['mobile'];
    $department = $_POST['department'];
    $regno = $_POST['regno'];

    // Database connection parameters
    $servername = "localhost";
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $dbname = "iot"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the database using prepared statements
    $sql = "INSERT INTO user (id, name, username, password, type, status) VALUES (?, ?, ?, ?, 2, 1)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssss", $roll, $name, $regno, $mobile);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();

    // Close connection
    $conn->close();
} else {
    echo "Form data is missing.";
}
?>

<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title></title>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/custom/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/custom/css/bootstrap-table.css">
	<link rel="stylesheet" type="text/css" href="assets/custom/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="assets/custom/css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="assets/custom/css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

	<!-- toastr -->
	<link rel="stylesheet" type="text/css" href="assets/toastr/css/toastr.css">

	<!-- custom -->
	<link rel="stylesheet" type="text/css" href="assets/mycustom/css/styles.css">


</head>
<style>  
.navbar{    margin-top: -3%;
            background-color: orange;
            color: black;
        }
  nav {
            width: 100%;
            
        }
.global-container {  
    background-size: cover;
    background-repeat: no-repeat; 
    background-position: center; 
}  
.global-container {  
    height: 100%;  
    display: flex;  
    align-items: center;  
    justify-content: center;  
    background-color: #f5f5f5;  
}  
form {  
    padding-top: 10px;  
    font-size: 25px;  
    margin-top: 0px;  
}  
.card-title {   
font-weight: 800;  
 }  
.btn {  
    font-size: 14px;  
    margin-top: 20px;  
}  
.login-form {   
    width: 370px;  
    margin: 20px;  

    border-radius: 10px; 
    padding: 20px; 
}  
.sign-up {  
    text-align: center;  
    padding: 20px 0 0;  
}  
.alert {  
    margin-bottom: -30px;  
    font-size: 13px;  
    margin-top: 20px;  
}  
.logo{
    width: 10px;
    height: 10px;
    margin: 0 auto; 
      display: block; 
      background-color:white;  
}
.title{
    text-align: center;
    font-size: 20px;
}
</style>  

<body>
<div class="container-fluid">
        <nav class="navbar navbar-expand-sm">

            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="./views/home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./views/compenents.html">Components</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./views/signup.html">Signup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">IOT Laboratory Management System</div>
						<div class="panel-body">
							<form class="frm_index">
								<fieldset>
									<div class="form-group">
										<input class="form-control" placeholder="Username" name="username" type="username" autofocus="" autocomplete="off">
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
									</div>
									<br>
									<button class="btn btn-primary btn-block">Log in</button>
								</fieldset>
							</form>
						</div>
					</div>
				</div><!-- /.col-->
			</div><!-- /.col-->
		</div><!-- /.row -->	
	</div><!-- /.row -->	





	<!-- javascript -->
	<script type="text/javascript" src="assets/custom/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="assets/custom/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/toastr/js/toastr.min.js"></script>
	<script type="text/javascript" src="assets/mycustom/js/login.js"></script>

</body>
</html>