<?php
include_once('../../vendor/autoload.php');
use App\Users\Users;
$obj=new Users();
if ($_SERVER['REQUEST_METHOD']=='POST') {
	if (!empty($_POST['id']) OR !empty($_POST['stu_name']) OR !empty($_POST['stu_dob']) OR !empty($_POST['stu_dept'])) {
                    $available = $obj->setData($_POST)->validity();
                    if (empty($available)) {
                        $obj->setData($_POST)->store();
                    } else {
                        $_SESSION['fail'] = "You'r student ID not exists!!";
                        header("Location:index.php");
                    }
		
}else{

	$_SESSION['fail']="field must not be empty";
		header('Location:index.php');
}
}else{
	header('Location:index.php');
}