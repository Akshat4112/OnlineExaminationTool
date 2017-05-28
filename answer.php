<?php
include 'class/users.php';
$ans=new users;
$answer=$ans->answer($_POST);
?>
<html>
<head><title>Answers</title></head>
<body>
<center>
<h2>Right Answer: <?php echo $answer['right']; ?></h2>
    <h2>Wrong Answer: <?php echo $answer['wrong']; ?></h2>
    <h2>Not Attempt: <?php echo $answer['no_answer']; ?></h2>
</center>
</body>
</html>

