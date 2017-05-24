<?php
include 'class/users.php';
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
//print_r($profile->data);
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="styles/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Home</title>
</head>
<body>
<div class="container">
    <div class="col-lg-12">
        <div>
            <h3>Online Examination tool</h3>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
            <li class=""><a href="#profile" data-toggle="tab">Profile</a></li>
            <li class="" style="float:right;"><a href="#menu1" data-toggle="tab">Logout</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade in active" id="home">
                <p>Hello</p>
            </div>
            <div class="tab-pane fade" id="profile">
                <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($profile->data as $profi ){

                    ?>
                    <tr>
                        <td><?php echo $profi['id'];?></td>
                        <td><?php echo $profi['name'];?></td>
                        <td><?php echo $profi['email'];?></td>
                        <td><img src="img/<?php echo $profi['img'];?>" alt="" width="25px" height="30px"/> </td>
                    </tr>
                </table><?php }?>
            </div>
            <div class="tab-pane fade" id="#menu1">
                <h1>Logout</h1>
            </div>
        </div>
    </div>
</div>
</body>
</html>