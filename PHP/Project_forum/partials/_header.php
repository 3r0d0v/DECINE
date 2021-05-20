<?Php
  session_start();
?>
<?php
ob_start();
echo '   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php">Idiscuss</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Categories</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php" tabindex="-1">Contact</a>
      </li>
    </ul>
    <div class="mx-2" style="display:flex;">';
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo '
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
      <p> welcome '.$_SESSION['email'].'</p>
    </form>';
  }
  else{
    echo 
    '<button class="btn btn-success mx-2" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
    <button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#signupmodal">Sign Up</button>
  </div>
</div>
</nav>';
}
include 'signup_modal.php';
include 'login_modal.php';
if (isset($_GET['signupsuccess'])  && $_GET['signupsuccess'] == "true"){
 echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
 <strong>You can now log in.</strong>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if (isset($_GET['err'])){
  $m = $_GET['err'];
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>'.$m.'</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
ob_get_flush();
?>