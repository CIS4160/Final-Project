<?php
if(!isset($_SESSION)){
  session_start();
  
}
// session_start();

// initializing variables
$first_name = "";
$last_name = "";
$email    = "";
$zip_code = "";
$card_number = "";
$expire_date = "";
$cvv = "";
$errors = array(); 

// connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'registration');
$db = mysqli_connect('localhost', 'root', '12345', 'events');

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $zip_code = mysqli_real_escape_string($db, $_POST['zip_code']);
  $card_number = mysqli_real_escape_string($db, $_POST['card_number']);
  $expire_date = mysqli_real_escape_string($db, $_POST['expire_date']);
  $cvv = mysqli_real_escape_string($db, $_POST['cvv']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "First is required"); }
  if (empty($last_name)) { array_push($errors, "Last Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($zip_code)) { array_push($errors, "Zip Code is required"); }
  if (empty($card_number)) { array_push($errors, "Card Number is required"); }
  if (empty($expire_date)) { array_push($errors, "Expire Date is required"); }
  if (empty($cvv)) { array_push($errors, "Security Code is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM netflix_credit_registar  WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO netflix_credit_registar (first_name, last_name, email, password, zip_code, card_number, expire_date, cvv) 
  			  VALUES('$first_name', '$last_name', '$email', '$password', '$zip_code', '$card_number', '$expire_date', '$cvv')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: netflix_movie.html');
  }
}