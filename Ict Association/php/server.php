<?php
session_start();

$id="";
$name="";
$department="";
$batch="";
$email="";
$password="";

$errors=array();


//connect to db
$db=mysql_connect('localhost','root','','website')or die("could not connect o database");

//register user
$id = mysqli_real_escape_string($db,$_POST['id']);
$name = mysqli_real_escape_string($db,$_POST['name']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$department = mysqli_real_escape_string($db,$_POST['department']);
$batch = mysqli_real_escape_string($db,$_POST['batch']);
$password = mysqli_real_escape_string($db,$_POST['password']);

//form validation

if(empty($id)) {array_push($errors,"id is required");
if (empty($name)) {array_push($errors,"name is required");
if(empty($department)) {array_push($errors,"department is required");
if(empty($batch)) {array_push($errors,"batch is required");
if(empty($email)) {array_push($errors,"email is required");
if(empty($password)) {array_push($errors,"password is required");

//check db for existing user with same name

$user_check_query= "SELECT * FROM association WHERE email='$email' or name = '$name' LIMIT 1";
$results = mysqli_query($db,$user_check_query);
$association = mysqli_fetch_assoc($result);

if($association){
	if($association['email']===$email){array_push($errors, "email already exists");}
	if($association['name']===$name){array_push($errors, "name already exists");}

}

//Register the user if no error

if (count($errors)==0) {

    $password = md5($password);//this will encrypt the password
    $query= "INSERT INTO association(id,name,department,batch,email,password) VALUES ('$id','$name','$department','$batch','$email','$password')";

    mysqli_query($db,$query);
    $_SESSION['name']=$name;
    $_SESSION['success']="You are now logged in.";

    header('location:member.php');
}
?>