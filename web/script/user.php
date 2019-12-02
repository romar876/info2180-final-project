<?php


define('email', 'admin@bugme.com');
define('password', 'password123');
define('HOST', 'localhost');
define('DATABASE', 'bugMe');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, email, password);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

session_start();
 
if (isset($_POST['login'])) {
 
    $email = $_POST['email'];
    $password =md5($_POST['password']);
 
    $query = $connection->prepare("SELECT * FROM Users WHERE email=:email and password =:password");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->bindParam('password', $password, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);

    $user = 'admin@bugme.com' . '@' . 'localhost';
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {

        if (password_verify($password, $result['PASSWORD'])) {


            $query .= "GRANT ALL PRIVILEGES ON *.* TO `" . $user . "` REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;";

            $query .= "GRANT SELECT, INSERT, UPDATE, DELETE ON, CREATE, DROP, INDEX, ALTER ON '" . 'bugMe' . "`.* TO `" . $user . "'IDENTIFIED BY'". $password; 

            header("location: DebugTracker.html");


           }
         else {
            header("location : login.php");
        }
    }
}
 
?>

?>