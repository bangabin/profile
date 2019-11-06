<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add Profile</title>
</head>
<body class="hold-transition login-page" style="background-color:#F7F6F6; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
    <?php 
    session_start();
    if (!empty($_SESSION['access_token'])) { 
    ?>    
<br><br>
<center>
  <div class="login-box" style="background-color:#fff;width:500px; box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);">
    <div class="login-box-body"  style="border-width: 5px">      
    <div style="font-size: 12px;margin-bottom: 30px">
    <center><img src="img/privyid_logo.png" style="width:150px;"></center>
    <form action="register.php" method="POST" style="margin: 20px;">
    <input type="hidden" name="case" value="4">
    <h3>Personal Information</h3>
  <div class="form-group form-control-sm">
    <input type="text" class="form-control" name="name" placeholder="Name">
  </div>
  <div class="form-group form-control-sm">
        <select class="form-control" name="gender">
            <option value="1">Girl</option>
            <option value="0">Boy</option>
        </select>
  </div>
  <div class="form-group form-control-sm">
    <input type="text" class="form-control" name="birthday" placeholder="Birthday DD/MM/YYYY">
  </div>
  <div class="form-group form-control-sm">
    <input type="text" class="form-control" name="hometown" placeholder="Home Town">
  </div>
  <div class="form-group form-control-sm">
    <input type="text" class="form-control" name="bio" placeholder="Your Bio">
  </div>

  <h3>Education</h3>
  <div class="form-group form-control-sm">
    <input type="text" class="form-control" name="school_name" placeholder="School Name">
  </div>
  <div class="form-group form-control-sm">
    <input type="text" class="form-control" name="grad_time" placeholder="Graduation Time DD/MM/YYYY">
  </div>

  <h3>Career</h3>
  <div class="form-group form-control-sm">
    <input type="text" class="form-control" name="position" placeholder="Position">
  </div>
  <div class="form-group form-control-sm">
    <input type="text" class="form-control" name="company_name" placeholder="Company">
  </div>
  <div class="form-group form-control-sm">
    <input type="text" class="form-control" name="starting_from" placeholder="Starting From DD/MM/YYYY">
  </div>
  <div class="form-group form-control-sm">
    <input type="text" class="form-control" name="ending_in" placeholder="Ending In DD/MM/YYYY">
  </div>

  <br>
  <button type="submit" class="btn btn-danger btn-block">Add Profile</button>
</form>
    <br>

    <!-- <h1>Please Fill your Profile</h1>
    <br>
    <br>
    <form action="register.php" method="post">
        <input type="hidden" name="case" value="4">
        <h2>Personal information</h2>
        <br>
        Name : &nbsp<input type="text" name="name">
        Gender: <select name="gender">
            <option value="1">Girl</option>
            <option value="0">Boy</option>
        </select>
        Birthday : &nbsp<input type="text" name="birthday">
        Hometown : &nbsp<input type="text" name="hometown">
        Bio : &nbsp
        <textarea name="bio" id="" cols="3" rows="3"></textarea>
        <br>
        <hr>
        <h2>Education</h2>
        <br>
        School Name : &nbsp<input type="text" name="school_name">
        Graduation Time : &nbsp<input type="text" name="grad_time">
        <br>
        <hr>
        <h2>Career</h2>
        Position : &nbsp<input type="text" name="position">
        Company Name : &nbsp<input type="text" name="company_name">
        Starting From : &nbsp<input type="text" name="starting_from">
        Ending In : &nbsp<input type="text" name="ending_in">
        <br>
        <button type="submit">Submit</button>    
    </form> -->
    <?php
        }else{
    ?>
        <h1>Failed To Sign In!</h1>
    <?php }?>
</body>
</html>