<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Form</title>

	<link rel="stylesheet" type="text/css"  href="Style/Edit_Form.css" />

</head>

<body background="Images/MyBackground.png" bgcolor="#FFCC99">
	<div class="topbar"> <h1 style="color:#FFF"><center>Patient's Profile</center></h1></div>    
	<center>
    <div class="box">
    <?php
        $id = $_GET['txtid'];
        include ("conn.php");
        $i = mysqli_query($conn, "SELECT * FROM tbl_student WHERE stuid=".$id);
        if($tr=mysqli_fetch_array($i))
        {
    ?>
    <table><form method="post" action="update_exe.php">
    	<tr>
        	<th>ID:</th>
        	<td><input type="text" name="txtid" value="<?php echo $tr[0]; ?>"/></td>
        </tr>
        <tr>
        	<th>Name:</th>
        	<td><input type="text" name="txtname" value="<?php echo $tr[1]; ?>" /></td>
        </tr>
        <tr>
        	<th>Gender:</th>
        	<td>
            	<input type="text" name="txtgender" value="<?php echo $tr[2]; ?>" /></td>
            </td>
        </tr>
        <tr>
        	<th>Date of Birth:</th>
        	<td><input type="text" name="txtdob" value="<?php echo $tr[3]; ?>" /></td>
        </tr>
        <tr>
        	<th>Address:</th>
        	<td><textarea cols="16" rows="3" name="txtaddress"> <?php echo $tr[4];?> </textarea></td>
        </tr>
        <tr>
        	<th>BMI:</th>
            <td><textarea cols="16" rows="3" name="txtsubject"> <?php echo $tr[5];?> </textarea></td>
        </tr>            
        <tr>
        	<th>Edited Date:</th>
            <td><input type="text" name="txtdate" value="<?php echo date("d/M/Y"); ?>" readonly="readonly" /></td>
            
        </tr>
            <?php
				}
			?>
        	<td colspan="2" align="center"><input type="submit" name="cmdedit" value="Save" />
            <a href="index2.php"><img src="Images/Users_Group.png" title="Go Back"/></a>
            </td>
        </tr>
    </div>
    </center>
    
</body>
</html>