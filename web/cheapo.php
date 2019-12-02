<?php 

$host =getenv('IP');
$username = getenv('C9_USER');
$password='';
$dbname ='CheapoMail';
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];

$pass = $_POST["password"];

$newPass = password_hash($pass, PASSWORD_DEFAULT,['cost' => 12]);

 $query = "INSERT INTO Users(firstname, lastname, username, password) 
        VALUES($firstname, $lastname, $username, $newPass)";
        
if($conn -> query($query) == TRUE){
            echo "Successful!";
        }else{
            echo "Failed!";
        };

echo "<link rel='styelsheet type='text/css' href='form.css'>";
echo "<h1 style='color: indigo; text-align: center; background-color:orange'> Thank You for Registering!</h1>";
echo "<body style='background-color:rgb(32,87,190)'></body> ";


