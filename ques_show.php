<?php
include 'class/users.php';
$qus=new users;
$cat= $_POST['cat'];
$qus->ques_show($cat);

//print_r($qus->qus);
?><html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="styles/bootstrap.css" rel="stylesheet">
    <script src="styles/jq.js"></script>
    <title>Questions</title>
</head>
<body>
<div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"> <h2>Online Quiz</h2>
    <?php
    $i=1;
    foreach ($qus->qus as $qust){?>
    <table class="table table-hover ">
        <thead>
        <tr class="alert-danger">
            <th><?php echo $i.' ';?><?php echo $qust['ques'];?></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>&nbsp;1&emsp;<input type="radio" value="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans1'];?></td>
        </tr>
        <tr>
            <td>&nbsp;2&emsp;<input type="radio" value="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans2'];?></td>
        </tr>
        <tr>
            <td>&nbsp;3&emsp;<input type="radio" value="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans3'];?></td>
        </tr>
        <tr>
            <td>&nbsp;4&emsp;<input type="radio" value="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans4'];?></td>
        </tr>
        </tbody>
    </table>
<?php $i++;}?>
    </div>
    <div class="col-sm-2"></div>
</div>
</body>
</html>
