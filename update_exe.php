

<?php   
    if(isset($_POST['cmdedit']))
    {
        require_once ("conn.php");
        $id = $_POST['txtid'];
        $txtname = $_POST['txtname'];
        $txtgender = $_POST['txtgender'];
        $txtdob = $_POST['txtdob'];
        $txtaddress = $_POST['txtaddress'];
        $txtsubject = $_POST['txtsubject'];
        $txtdate = $_POST['txtdate'];
        $query = mysqli_query($conn, "UPDATE tbl_student SET pname='$txtname',gender='$txtgender',dob='$txtdob',paddress='$txtaddress',sub='$txtsubject',rdate='$txtdate' WHERE stuid='$id'");
        $result = mysqli_query($conn,$query);
        if($result);
        {
            header("location:index2.php");
        }
    }// gender='.$_POST['txtgender'].', dob='.$_POST['txtdob'].', paddress='.trim($_POST['txtaddress']).', sub='.$_POST['txtsubject'].', rdate='.$_POST['txtdate'].' 
        
?>