<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 5/23/2017
 * Time: 5:14 PM
 */

include "class/users.php";
$register = new users;
extract($_POST);
$img_name=$_FILES['img']['name'];
$temp_name=$_FILES['img']['tmp_name'];
move_uploaded_file($temp_name,"img/".$img_name);
$query=("insert into signup values('','$n','$e','$p','$img_name')");
if($register->signup($query)){
    $register->url("index.php?run=success");
}