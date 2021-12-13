<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RHU BMI System</title>
<link rel="stylesheet" type="text/css" href="Style/design.css" />
</head>
<body>
<center><h1>Body Mass Index System</h1></center>
<a class="addnew" href="insert.php" style="font-face:Khmer OS Battambang; font-size:16px;">New Patient</a></font>
| <select name="forma" onchange="location = this.value;">
<option>View Option</option>
<option value="index2.php">All</option>
<option value="index3.php">Underweight</option>
<option value="index4.php">Normal</option>
<option value="index5.php">Overweight</option>
<option value="index6.php">Obese</option>
</select>
| <a href="print_index4.php">Print</a>
| <a href="logout.php">Logout</a>
  

	<table>
    	<tr>
            <th>ID</th>
            <th>Patient Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>BMI</th>
            <th>Registered Date</th>
            <th>Option</th>
    	</tr>
        <?php
			include "conn.php";
			$query = mysqli_query($conn,"SELECT * FROM tbl_student WHERE sub2='NORMAL'");
			while($tr = mysqli_fetch_array($query))
			{
		?>
        <tr>
        	<td><?php echo $tr[0]; ?></td>
            <td><?php echo $tr[1]; ?></td>
            <td><?php echo $tr[2]; ?></td>
            <td><?php echo $tr[3]; ?></td>
            <td><?php echo $tr[4]; ?></td>
            <td align="center"><a href="view.php? txtid=<?php echo $tr[0];?>" title="Click to view suggestion"><?php echo $tr[6]; ?></a>
            <td><?php echo $tr[7]; ?></td>
            <td align="center"><a href="Delete_Form.php? txtid=<?php echo $tr[0];?>">Delete</a> / <a href="Edit_Form.php? txtid=<?php echo $tr[0];?>">Update</a> </td>    
        </tr>
        <?php
			}
		?>
		
    </table>
</body>
</html>