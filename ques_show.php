<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 5/28/2017
 * Time: 7:59 PM
 */
include 'class/users.php';
$qus=new users;

$cat= $_POST['cat'];
$qus->ques_show($cat);
echo "<pre>";
print_r($qus->qus);
