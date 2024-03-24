<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>
<link rel="stylesheet" href="css/login.css" />
</head>
<body>
<center>
<div class="form-group">
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
	
        $username = $_POST['username'];
		$fullname = $_POST['fullname'];
		$Department = $_POST['Department'];
		$pss = $_POST['pss'];
		$question = $_POST['question'];
		$answer = $_POST['answer'];
		$username = stripslashes($username);
		$username = mysqli_real_escape_string($conn,$username);
		$fullname = stripslashes($fullname);
		$fullname = mysqli_real_escape_string($conn,$fullname);
		$trn_date = date("Y-m-d H:i:s");
		$Department = stripslashes($Department);
		$Department = mysqli_real_escape_string($conn,$Department);
		$pss = stripslashes($pss);
		$pss = mysqli_real_escape_string($conn,$pss);
		$question = stripslashes($question);
		$question = mysqli_real_escape_string($conn,$question);
		$answer = stripslashes($answer);
		$answer = mysqli_real_escape_string($conn,$answer);
        $query = "INSERT into `users` (username, fullname, trn_date, Department, pss, question, answer) VALUES ('$username', '$fullname', '$trn_date', '$Department', '$pss', '$question', '$answer')"; 
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration Form</h1>
<form name="registration" action="" method="post">
<input type="number" name="username" placeholder="Registration Number" required />
<input type="fullname" name="fullname" placeholder="full name" required />
<select name="Department" required>
		<option>----------Chosse your Department--------</option>
        <option>Computer/Intergerated Science</option>
        <option>Physics/Computer</option>
        <option>Biology/Computer</option>
        <option>Maths/Computer</option>
        <option>Chemistry/Computer</option>
        <option>Others</option>      
    </select>
	<input type="pss" name="pss" placeholder="Password" required />
	<select name="question" arequired>
		<option>----------Chosse Any Question--------</option>
        <option>what is your favorite color</option>
		<option>what is your favorite movie</option>
		<option>what is your favorite singer</option>
		<option>what is your favorite pet</option>
		<option>what is your favorite cartoon character</option>
		<option>what is your Best Boy/Girl Friend</option>
		<option>what is your nickname</option>
		<option>what is your First Teachers Name</option>
	<input type="answer" name="answer" placeholder="answer" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>