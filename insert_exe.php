<?php   
    $id = $_POST['txtid'];
    $name = trim($_POST['txtname']);
    $gender = trim($_POST['txtgender']);
    $dob = trim($_POST['txtday']."/".$_POST['txtmonth']."/".$_POST['txtyear']);
    $address = trim($_POST['txtaddress']);
    $sub = "Set BMI";
    $date = trim($_POST['txtdate']);
    if(isset($_POST['cmdadd']))
    {
        if(empty($name) || $gender=="Select Gender" || $_POST['txtday']=="Day" || $_POST['txtmonth']=="Month" || $_POST['txtyear']=="Year" || empty($address) || $sub=="Select Subject")
        {
            echo "<center>Sorry please input data</center>";
            echo '<META HTTP-EQUIV="Refresh" Content="3; URL=insert.php">';
        }
        else
        {
            require_once ("conn.php");
            $query = "INSERT INTO tbl_student (stuid, pname, gender, dob, paddress, sub, sub2, rdate) VALUES('$id','$name','$gender','$dob','$address','$sub','Set BMI','$date')";
            $result = mysqli_query($conn,$query);
            if($result);
            {
                header("location:index2.php");
            }
        }
    }
        
?>