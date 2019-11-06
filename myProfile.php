<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add Profile</title>
</head>
<body class="hold-transition login-page" style="font-size:17px;background-color:#fff; margin:30px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
    <?php 
    session_start();
    if (!empty($_SESSION['access_token'])) { 
    ?>
<br>    
<center><img src="img/privyid_logo.png" style="width:130px;"></center>
<br>
<br>
<form action="register.php" method="POST">
<div class="row">
  <div class="col-sm-4">
    <div class="card" style="box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);">
      <div class="card-body">
      <h5 class="card-header">#Personal Information</h5>
        <br>
        <span class="badge badge-pill badge-light">Name</span>
        <p class="card-text">Pui</p>
        <span class="badge badge-pill badge-light">Gender</span>
        <p class="card-text">Girl</p>
        <span class="badge badge-pill badge-light">Birthday</span>
        <p class="card-text">23-08-1998</p>
        <span class="badge badge-pill badge-light">Home Town</span>
        <p class="card-text">Yogyakarta</p>
        <span class="badge badge-pill badge-light">Bio</span>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card" style="box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);">
      <div class="card-body">
      <h5 class="card-header">#Education</h5>
        <br>
        <span class="badge badge-pill badge-light">School Name</span>
        <p class="card-text">Universitas Gadjah Mada</p>
        <span class="badge badge-pill badge-light">Graduation Time</span>
        <p class="card-text">22-08-2019</p>
    </div>
    </div>
  </div>
<div class="col-sm-4">
    <div class="card" style="box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);">
      <div class="card-body">
      <h5 class="card-header">#Career</h5>
        <br>
        <span class="badge badge-pill badge-light">Position</span>
        <p class="card-text">QA</p>
        <span class="badge badge-pill badge-light">Company</span>
        <p class="card-text">Privy ID</p>
        <span class="badge badge-pill badge-light">Starting From</span>
        <p class="card-text">01-12-2019</p>
        <span class="badge badge-pill badge-light">Ending In</span>
        <p class="card-text">01-12-2020</p>
    </div>
    </div>
  </div>
</div>
  <br>
  <br>
  <br>
  <button type="submit" name="case" value=5 class="btn btn-outline-danger btn-block">Logout</button>
  </form>  
  <br>
    <?php
        }else{
    ?>
        <h1>Failed To Sign In!</h1>
    <?php }?>
</body>
</html>
