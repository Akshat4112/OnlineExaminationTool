<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 5/23/2017
 * Time: 6:02 PM
 */
include 'class/users.php';
$signin=new users;
extract($_POST);
if($signin->signin($e,$p)){
    $signin->url("home.php");
}
else{
    $signin->url("index.php?run=failed");
}