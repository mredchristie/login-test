<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home Page</a>
    <a class="navbar-brand" href="sign-up.php">Sign up</a>
    <a class="navbar-brand" href="login.php">Login</a>
    <a class="navbar-brand" href="logout.php">Logout</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
  </div>
</nav>

<?php

session_start();

if ( isset($_SESSION['username']))
{
  echo 'Logged in as ' . $_SESSION['username'] . ' | ' . '   User ID = '. $_SESSION['userid'];

}else{
  echo 'Not logged in currently';
}


?>



</body>

