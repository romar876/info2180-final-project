<?php
    $host = 'localhost';
    $dbname = 'bugme';
    $Usersname = 'root';
    $password = '';




try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $Usersname, $password);
    echo "Connected to $dbname at $host successfully.";
    $conn = null;
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
if( isset( $_POST['submit_form'] ) )
{
    $fName = $_POST['Firstname'];
    $lName = $_POST['Lastname'];
    $emailAddress = $_POST['email'];
    $password = $_POST['password'];

    

    
    $salt = mt_rand();
    $password_digest = md5($salt.$password);

    $connect = new PDO("mysql:host=$host;dbname=$dbname", $Usersname, $password);
    $insertData = "INSERT INTO 'Users'(`id`, `firstname`, `lastname`, `password_digest`,)
    VALUES ('$fName','$lName','$emailAddress','$password_digest',)";
    
    $stmt = $connect->query($insertData);


    

    $stmt = $connect->query("SELECT * FROM Users");
    $results = $stmt ->fetchALL(PDO ::FETCH_ASSOC);

    $htmlTableFormat = '<div>
		<table>
        <thead>
            <tr>
            <th>First Name</th><th>Last Name
            <th>Email</th><th>Digest</th>
            </tr>
        </thead><tbody>';
        foreach ($results as $row) 
        {
            $htmlTableFormat .=  '<tr><td>' . $row['firstname'] .'</td><td>'. $row['lastname'] . '</td>
                                  <td>' . $row['email'] .'</td><td>' . $row['password_digest'] .'</td>;
        }
        
        $htmlTableFormat .= '</tbody></table></div>';
        echo $htmlTableFormat;	
        
}





