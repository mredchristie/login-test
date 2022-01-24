<?php

include_once "lib/db.php";
$conn = connect();

$user = $conn->real_escape_string($_POST['firstname']);
$pass = $conn->real_escape_string($_POST['password']);

$result = $conn->query("SELECT * FROM login WHERE username='$user'");

if ($row = $result->fetch_assoc()){

    if (password_verify($pass, $row['password'])) {
        session_start();
        echo ' User ID -  ';
        $_SESSION['userid'] = $row['ID'];
        ECHO 'Username - ';
        $_SESSION['username'] = $user;
        header("Location: LOGGEDIN.php");
    
    }
    
}
else
{
    echo'internal failure';
}


?>




<!-- this is johns php (external)-->
<?php
//

//$userr = new User($connection, $_POST['username'], $_POST['password']);
////$userr->authenticate();


//if ($userr -> is_logged_in()){
    //session_start();
   // $_SESSION['username'] = serialize($userr);
   // header ("Location: LOGGEDIN.php")
//} else{
    ////echo "Could not log in with these credentials";
//}

?>