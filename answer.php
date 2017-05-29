<?php
include 'class/users.php';
$ans=new users;
$answer=$ans->answer($_POST);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="styles/bootstrap.css" rel="stylesheet">
    <script src="styles/jq.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Answers</title>
</head>
<body>
<h2 align="center">Your Quiz Results</h2>
<?php
$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
$attempted=$answer['right']+$answer['wrong'];
?>
<div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-10"></div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>Total No. of Questions</td>
            <td><?php echo $total_qus;?></td>
        </tr>
        </thead>
        <tbody><tr><td>
                Attempted Questions
            </td><td>
                <?php echo $attempted; ?>
            </td>
        </tr><tr>
            <td>Right Answer</td>
            <td><?php echo $answer['right']; ?></td>
        </tr>
        <tr>
            <td>Wrong Answer</td>
            <td><?php echo $answer['wrong']; ?></td>
        </tr>
        <tr>
            <td>Not Attempted</td>
            <td><?php echo $answer['no_answer']; ?></td>
        </tr>
        <tr>
            <td>Your Result</td>
            <td><?php
                $per=($answer['right']*100)/$total_qus;
                echo $per.'%';
                ?></td>
        </tr>
        </tbody>
    </table>
</div>
<div class="col-sm-2"></div>
</body>
</html>

