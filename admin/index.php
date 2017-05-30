<?php
include '../class/users.php';
$cate=new users;
$categ =0;
$categ=$cate->cat_shows();
echo '<br>';
print_r($categ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Pannel</title>

    <!-- Bootstrap core CSS -->
    <link href="../styles/bt.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item</a></li>
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
                <li><a href="">More navigation</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="table-responsive">
                <table class="table table-striped">

                    <form class="form-horizontal" method="post" action="add_quiz.php">
                        <fieldset>
                            <legend>Admin Pannel</legend>
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Question</label>
                                <div class="col-lg-10">
                                    <input type="text" name="ques" class="form-control" id="inputEmail" placeholder="Enter Question">
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Option 1</label>
                                <div class="col-lg-10">
                                    <input type="text" name="op1" class="form-control"  placeholder="Enter Option 1">
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Option 2</label>
                                <div class="col-lg-10">
                                    <input type="text" name="op2" class="form-control"  placeholder="Enter Option 2">
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Option 3</label>
                                <div class="col-lg-10">
                                    <input type="text" name="op3" class="form-control"  placeholder="Enter Option 3">
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Option 4</label>
                                <div class="col-lg-10">
                                    <input type="text" name="op4" class="form-control"  placeholder="Enter Option 4">
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Answer</label>
                                <div class="col-lg-10">
                                    <input type="text" name="ans" class="form-control"  placeholder="Enter Answer">
                                </div>
                            </div><br><br>

                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Category</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select" name="cat">
                                        <option value="" disabled="disabled">Choose Category</option>

                                        <?php
                                        foreach($categ as $c){
                                            echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
                                        }

                                        ?>
                                        <!-- option value="">Railway_1</option>
                                        <option value="">Railway_2</option -->
                                    </select>
                                    <br>
                                 </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../../assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>