<?php
include 'class/users.php';
$qus=new users;
$cat= $_POST['cat'];
$qus->ques_show($cat);
$_SESSION['cat']=$cat;

//print_r($qus->qus);
?><html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="styles/bootstrap.css" rel="stylesheet">
    <script src="styles/jq.js"></script>
    <title>Questions</title>
    <script type="text/javascript">
        function  timeout() {
            var hours=Math.floor(timeLeft/3600);
            var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);

            /*
            * 2*60*60-2*60*60-30=-30/60=-1/2
            *
            * */
            var second=timeLeft%60;
            var hrs=checktime(hours);
            var mint=checktime(minute);
            var sec=checktime(second);
            if (timeLeft <= 0) {
                clearTimeout(tm);
                document.getElementById("form1").submit();
            } else{

                document.getElementById("time").innerHTML = hrs+":"+mint + ":" + sec;
            }
            timeLeft--;

            var tm=setTimeout(function () {
                timeout()()
            },1000);
        }
        function  checktime(msg) {
            if(msg<10){
                msg="0"+msg;
            }
            return msg;
        }
    </script>
</head>
<body onload="timeout()">
<div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"> <h2>Online Quiz
            <script type="text/javascript">
                var timeLeft=2*60*60;
            </script>
            <div id="time" style="float: right;"></div> </h2>
        <form id="form1" action="answer.php" method="post">
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
        <?php if(isset($qust['ans1'])){?>
        <tr>
            <td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans1'];?></td>
        </tr>
        <?php }?>
        <?php if(isset($qust['ans2'])){?>
        <tr>
            <td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans2'];?></td>
        </tr>
        <?php }?>
        <?php if(isset($qust['ans3'])){?>
        <tr>
            <td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans3'];?></td>
        </tr>
        <?php }?>
        <?php if(isset($qust['ans4'])){?>
        <tr>
            <td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans4'];?></td>
        </tr>
        <?php }?>
        <tr>
            <td><input type="radio" style="display:none;" checked="checked" value="4" name="<?php echo $qust['id']; ?>" /></td>
        </tr>
        </tbody>
    </table>
<?php $i++;}?>
        <center><input type="submit" value="submit Quiz" class="btn btn-success"></center>
        </form>
    </div>
    <div class="col-sm-2"></div>
</div>
</body>
</html>
