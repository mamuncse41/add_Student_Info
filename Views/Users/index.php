<?php 

session_start();
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
            <form method="post" action="store.php">
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
        <tr><th><label>Student Information Add</label></th></tr>
	<tr>
            <td><input type="number" name="id" placeholder="enter student ID..." id="input"></td>
	</tr>
	<tr>
		<td><input type="text" name="stu_name" placeholder="enter student name.." id="input"></td>
	</tr>
	<tr>
		<td>
                    <input  type="date" min="1960-01-01" max="1999-01-31" name="stu_dob" placeholder="Date Of Birth" id="selectAge">
		</td>
	</tr>
	<tr>
		<td>
                    <select name="stu_dept" id="selectCatagory">
				<option value="0">Select Department</option>
  				<option value="CSE">CSE</option>
 				 <option value="BBA">BBA</option>
  				<option value="English">English</option>
 	 			
</select>
		</td>
	</tr>
	<tr>
		<td><input type="submit" name="" value="Add"><input type="reset" name="" value="Cancel"></td>
                <td></td>
	</tr>
</table>
</form>
</div>
</body>
</html>