<?php include_once('../../vendor/autoload.php');
use App\Users\Users;
$obj=new Users();
$data=$obj->setData($_GET)->show();
//print_r($data);
//die();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Information Page</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
           <link rel="stylesheet" href="../styles.css" type="text/css">
</head>
<body>
	<div class="header">
<div class="vertical-menu">
    <a href="index.php">Add</a>
  <a href="search.php">Search</a>
</div>
            <form method="post" action="update.php" name="selectDept">
                <table border="1px" align="center" id="table_post">
	<tr>
	  <h2>
                    <?php
                    echo '<h2 style="color:#006400; font-size:20px; text-align:center;">';
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    echo '</h2>';
                    echo '<h2 style="color:red; font-size:20px; text-align:center;">';
                    if (isset($_SESSION['fail'])) {
                        echo $_SESSION['fail'];
                        unset($_SESSION['fail']);
                    }
                    echo '<h2>';
                    ?>
                </h2>
	</tr>
        <tr><th><label>Student Information Update</label></th></tr>
	<tr>
            <td><label id="selectCatagory">Student ID: </label><?php echo $data['id'];?></td>
	</tr>
	<tr>
            <td><label>Student Name: </label><input type="text" name="stu_name" value="<?php echo $data['stu_name'];?>" id="selectCatagory"></td>
	</tr>
	<tr>
		<td>
                    <label>Date Of Birth: </label>
			<input  type="date" min="1960-01-01" max="1999-01-31" name="stu_dob" value="<?php echo $data['stu_dob'];?>" id="selectCatagory">
		</td>
	</tr>
	<tr>
		<td>
                    <label>Department: </label>
			<select name="stu_dept" value="<?php echo $data['stu_dept'];?>" id="selectCatagory">
				<option value="0">Select Department</option>
  				<option value="CSE">CSE</option>
 				 <option value="BBA">BBA</option>
  				<option value="English">English</option>
 	 			
</select>
		</td>
	</tr>
	<tr>
            <input type="hidden" name="id" value="<?php echo $data['id'];?>">
		<td><input type="submit" name="" value="Update"></td>
	</tr>
</table>
</form>
</div>
    <script>
        document.forms['selectDept'].elements['stu_dept'].value="<?php echo $data['stu_dept'];?>";
    </script>
          
       
</body>
</html>

