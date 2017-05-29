<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 5/29/2017
 * Time: 11:51 PM
 */
extract($_POST);
include '../class/users.php';
$quiz=new users;
$qus=htmlentities($qus);
$op1=htmlentities($op1);
$op2=htmlentities($op2);
$op3=htmlentities($op3);
$op4=htmlentities($op4);
$array=[$op1,$op2,$op3,$op4];
$ans=array_search();
$quiz->add_quiz();

