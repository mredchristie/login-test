<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>





<button type="button" class="btn btn-info"><a href="sign-up.php" >Sign up here</a></button>
<button type="button" class="btn btn-info"><a href="login.php" >Login Here</a></button>







<?php




session_start();

if ( isset($_SESSION['username']))
{
  echo 'Logged in as ' . $_SESSION['username'] . ' | ' . '   User ID = '. $_SESSION['userid'];

}else{
  echo 'Not logged in currently';
}





?>

Click here to <a href="logout.php" tite="Logout">Logout.</a>




