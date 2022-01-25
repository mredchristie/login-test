<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}



input[type=password]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}



input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
</head>


<?php




session_start();

if ( isset($_SESSION['username']))
{
  echo 'Logged in as ' . $_SESSION['username'] . ' | ' . '   User ID = '. $_SESSION['userid'];

}else{
  echo '.';
}





?>

<body>


    
    
    
    
    <button type="button" class="btn btn-info"><a href="sign-up.php" >Sign up here</a></button>
    <button type="button" class="btn btn-info"><a href="login.php" >Login Here</a>
    </button>
    Click here to <a href="logout.php" tite="Logout">Logout.</a>

<h3>SIGN UP FORM</h3>

<div class="container">
  <form action="sign-up-action.php" method="POST">
    <label for="username">First Name</label>
    <input type="text" name="firstname" placeholder="username">

    <label for="password">Last Name</label>
    <input type="password" name="password" placeholder="password">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
