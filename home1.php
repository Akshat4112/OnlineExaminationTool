<?php
include 'class/users.php';
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
//print_r($profile->data);
 ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="styles/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>OET</h2>


    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
        <li><a data-toggle="tab" href="#menu1">Profile</a></li>
        <li><a data-toggle="tab" href="#menu2">Logout</a></li>

    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>HOME</h3>

        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>Profile</h3>

        </div>
        <div id="menu2" class="tab-pane fade"">
            <h3>Logout</h3>

        </div>

    </div>
</div>

</body>
</html>

