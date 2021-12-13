<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Patient</title>
		<link href="Style/Add_Form.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#99CC66" background="Images/bg.jpg">
    <center><h1>Add Patient</h1></center>

<div id="form">
    <table>
        <form method="post" action="insert_exe.php">
            <tr>
            
            <?php
                include ("conn.php");
                $g = mysqli_query($conn, "select max(stuid) from tbl_student");
                while($id=mysqli_fetch_array($g))
                {
            ?>
            
                <th>ID:</th>
                <td><input type="text" name="txtid" value="<?php echo $id[0]+1; ?>" readonly="readonly" /></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <th>Name:</th>
                <td><input type="text" name="txtname" placeholder="Type Name"  /></td>
            </tr>
            <tr>
                <th>Gender:</th>
                <td><select name="txtgender">
                        <option>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Date of Birth:</th>
                <td>
                    <select name="txtday">
                        <option>Day</option>
                            <?php
                                //Do Loop while
                                $d=0;
                                do{
                                    $d++;
                                    echo "<option>".$d."</option>";
                                }while($d<=30);
                            ?>
                    </select>
                    <select name="txtmonth">
                        <option>Month</option>
                            <?php
                                //For Loop									
                            $m=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                            for($i=0;$i<count($m);$i++){
                            echo"<option>".$m[$i]."</option>";	
                            }
                            ?>

                    </select>
                    <select name="txtyear">
                        <option>Year</option>
                            <?php
                            //While Loop
                                $y=2021;
                                while($y>=1950){
                                    $y--;
                                    echo "<option>".$y."</option>";
                                }
                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><textarea cols="19px" rows="3" name="txtaddress" placeholder="Type Your Address"  /></textarea></td>
            </tr>
            <tr>
                <th>Register Date:</th>
                <td><input type="text" name="txtdate" value="<?php echo date("d/M/Y"); ?>" readonly="readonly" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="cmdadd" value="Add" /></td>
                <td><input type="reset" name="cmdreset" value="Clear"/></td>
            </tr>
        </form>
    </table>
</div>