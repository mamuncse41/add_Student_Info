<?php
include_once('../../vendor/autoload.php');
use App\Users\Users;
$obj=new Users();
$obj->setData($_GET)->delete();

