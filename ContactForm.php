<?php
include('connection.php'); //Executes the connection to the database
if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['subject']) && !empty($_POST['subject']))){

	print_r($_POST);// all the values are stored in form of array and then they are printed
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$to = "nallalaanvesh@gmail.com"; //email address to receive email
	$headers = "From : " . $email;
	
	if( mail($to, $subject, $message, $headers)){
		echo "E-Mail sent successfully, we will get in touch with you soon."; //message displayed after successful form submission
		
		$query = "INSERT INTO `form` (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')"; // inserts the data into the database
		$result = mysqli_query($connection, $query);
	}
}
 
?>
<html>
<head>
 <title>Contact Form</title>
 
</head>
<body>
 
<div class="container">
      <form  method="POST">
        <h2 >Contact Form</h2>
        <label for="inputName" >Name</label>
        	<input type="name" name="name" id="inputName" class="form-control" placeholder="Enter your Name" required>
        <label for="inputEmail" >E-Mail</label>
        	<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Enter your email name@email.com" required>    
<label for="inputSubject" >Subject</label>
        	<input type="name" name="subject" id="inputSubject" class="form-control" placeholder="Enter Subject " required>
        <label for="inputMessage" >Message</label>
    		<textarea name="message" class="form-control" id="inputMessage" placeholder="Enter your message" rows="2"></textarea>
        <button class="btn btn-lg btn-success btn-block" type="submit">Send</button>
      </form>
</div>
 
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
 
</html>
