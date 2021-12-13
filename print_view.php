<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Form</title>

	<link rel="stylesheet" type="text/css"  href="Style/Edit_Form.css" />

</head>

<body background="Images/MyBackground.png" bgcolor="#FFCC99">
	<div class="topbar"> <h1 style="color:#FFF"><center>Patient's Profile</center></h1><a href="index2.php"><img src="Images/Users_Group.png" title="Go Back"/></a></div>    
    <p align="left">
    <?php
        $id = $_GET['txtid'];
        include ("conn.php");
        $i = mysqli_query($conn, "SELECT * FROM tbl_student WHERE stuid=".$id);
        if($tr=mysqli_fetch_array($i))
        {
    ?>
<tr>
        	<th><font size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:</th>
        	<td><?php echo $tr[1]; ?></td>
        </tr><br>
        <tr>
        	<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:</th>
        	<td><?php echo $tr[4];?></td>
        </tr><br>
        <tr>
        	<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BMI:</th>
            <td><?php echo $tr[5];?></td>
    </tr><br><br></b>
       
        <center>
        <?php } 
        if ($tr[5] == 'Set BMI')
        { ?>
            <a href="bmicalc.php? txtid=<?php echo $tr[0];?>"><?php echo $tr[5]; ?></a>
        <?php
        }
        else
        {?>
             
        <?php } ?>       
    <br><br>
</body>
<script type="text/javascript">
	function PrintPage() {
		window.print();
	}
	document.loaded = function(){
		
	}
	window.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ window.close() },750)
	});
</script>
</html>