<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Profile</title>
</head>
<body class="hold-transition login-page" style="background-color:#F7F6F6; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
<?php 
    session_start();
    if (!empty($_SESSION['access_token'])) { 
    ?>   
    
    <h1><?php echo $_SESSION['profile']['name'] ?></h1>

    <?php
        }else{
    ?>
        <h1>Failed To Sign In!</h1>
    <?php }?>
</body>
</html>