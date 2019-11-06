<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="hold-transition login-page" style="background-color:#F7F6F6; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
<br><br>
<center>
  <div class="login-box" style="background-color:#fff;width:400px; box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);">
    <div class="login-box-body"  style="border-width: 5px">      
    <div style="font-size: 12px;margin-bottom: 30px">
    <center><img src="img/privyid_logo.png" style="width:150px;"></center>
    <form action="register.php" method="POST" style="margin: 20px;">
    <input type="hidden" name="case" value="3">
  <div class="form-group form-control-sm">
    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
  </div>
  
  <div class="form-group form-control-sm">
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  
  <div class="form-group form-control-sm">
    <input type="text" class="form-control" name="country" placeholder="Country">
  </div>

  <input type="hidden" name="latlong" value="1">
  <input type="hidden" name="device_token" value="1">

  <div class="form-group form-control-sm">
        <select class="form-control" name="device">
            <option value="0">IOS</option>
            <option value="1">Android</option>
        </select>
      </div>

  <!-- <small id="regisHelp" class="form-text text-muted">Remember your data to login</small> -->
  <br>
  <button type="submit" class="btn btn-danger btn-block">Login</button>
</form>
    <br>
    
    </div>
    </div>
    </div>
</center> 



<!-- <h1>Please Sign in!</h1>
    <form action="register.php" method="post">
        <input type="hidden" name="case" value="3">
        Phone &nbsp <input type="text" name="phone"><br>
        Password &nbsp<input type="text" name="password"><br>
        Latlong &nbsp<input type="text" name="latlong"><br>
        Device Token &nbsp<input type="text" name="device_token"><br>
        Device <select name="device">
            <option value="0">IOS</option>
            <option value="1">Android</option>
        </select>
        <button type="submit">Submit</button>
    </form> -->
</body>
</html>