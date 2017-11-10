<?php
include_once('../../vendor/autoload.php');
use App\Users\Users;
$obj=new Users();
$data=$obj->setData($_GET)->searchResult();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Information search Page</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
         <link rel="stylesheet" href="../styles.css" type="text/css">
</head>
<body>
	<div class="header">
<div class="vertical-menu">
    <a href="index.php">Add</a>
  <a href="search.php">Search</a>
</div>
           <table border="1px"  id="table_post">
               <tr>
                   <th>
           <form action="search.php" method="GET">
            <input type="text" name="keyword" placeholder="Search ID OR Department...." id="input">
	<input type="submit" value="Search">
           </form>
                   </th>
           </tr>
         
           
                <tr>
                     <h2>
                    <?php
               
                    echo '<h2 style="color:red; font-size:20px; text-align:center;">';
                    if (isset($_SESSION['fail'])) {
                        echo $_SESSION['fail'];
                        unset($_SESSION['fail']);
                    }
                    echo '<h2>';
                    ?>
                </h2>
                </tr>
	<tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Birth of Data</th>
            <th>Student Dept</th>
            <th>Action</th>
	</tr>
       
	   <?php
        foreach ($data as $value){
            ?>
	<tr>
            <td><a href="edit.php?id=<?php echo $value['id'];?>"><?php echo $value['id'];?></a></td>
            <td><?php echo $value['stu_name'];?></td>
            <td><?php echo $value['stu_dob'];?></td>
            <td><a href="edit.php?id=<?php echo $value['id'];?>"><?php echo $value['stu_dept'];?></a></td>
            <td><a onclick="return confirm('Are you sure trash!!');" href="delete.php?id=<?php echo $value['id'];?>">Delete</a></td>
	</tr>
        <?php } ?>

</table>

            

</div>
</body>
</html>

