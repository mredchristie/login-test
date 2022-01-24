
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php 
include_once "lib/db.php";

print_r($_POST);

// the credentials to connect to the database - the database name is very important as I found out the hardway

?>


<!-- need to remeber that if I want to add somem html within my php then I need to end off ?> the php and you can embed php like  -->
<hr>
username = <?= $_POST['firstname'] ?>
<br>
password = <?= $_POST['password']?>
<!-- this is just outputting the data of the php variables lname and fname -->



<?php
$conn = connect();

$user = $conn->real_escape_string($_POST['firstname']);
$pass = $conn->real_escape_string($_POST['password']);
//THIS IS PASSWORD HASHING - ONLY 1 LINE OF CODE REQUIRED. 
$hashed_pass = password_hash($pass, PASSWORD_BCRYPT);


$sql = "
    INSERT INTO
    login (
        username, password
    ) VALUES  (
        '{$user}', '{$hashed_pass}'
    )
    ";

echo $sql;
echo "<br>";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<br>";
    echo "USER ID IS:". $conn->insert_id;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


  header('Location: index.php');

?>

</body>
</html>
