<html>
<head>
    <link type="text/css" href="styles/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="styles/style.css" rel="stylesheet">
    <title>OET</title>
</head>
<body>
<div class="container">
    <div class="row topmargin">
        <div class="col-lg-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Online Examination Tool</h3>
                </div>
                <div class="panel-body">
                    Online Examination Tool for Online Exam Prepration
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 form_margin">
            <?php
            if(isset($_GET['run'])&&$_GET['run']=="failed"){
                echo 'Email or pass is incorrect';
            }
            ?>

            <form class="form-horizontal" method="post"  action="signin_sub.php">
                <fieldset>
                    <legend>Signin</legend>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="e">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="p">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
        <div class="col-lg-6">

            <?php
            if(isset($_GET['run'])&& $_GET['run']=="success"){
                echo "<div class=\"alert alert-dismissible alert-success\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  <strong>Well done!</strong> You are registered successfully <a href=\"#\" class=\"alert-link\"></a>.
</div>";
            }
            ?>

            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="signup_sub.php">
                <fieldset>
                    <legend>Signup</legend>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="n">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="e">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="p">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Upload Image</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="img">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<div class="panel panel-default" style="margin-top: 62px;">
    <div class="panel-body" style="margin-left: 1040px;">
        Developed By <a href="www.futureheadtech.com"> Futurehead Technologies</a>
    </div>
    <div class="panel-footer">All Rights Reserved &copy; 2017</div>
</div>
</body>
</html>
