

<?php   
    if(isset($_POST['cmdedit']))
    {
        require_once ("conn.php");
        $id = $_POST['txtid'];
        $txtbmi = $_POST['txtbmi'];
        $txtbmi2 = $_POST['txtbmi2'];
        
        $query = mysqli_query($conn, "UPDATE tbl_student SET sub='$txtbmi' WHERE stuid='$id'");
        $query = mysqli_query($conn, "UPDATE tbl_student SET sub2='$txtbmi2' WHERE stuid='$id'");
        $result = mysqli_query($conn,$query);
        if($result);
        {
            header("location:index2.php");
        }
    }// gender='.$_POST['txtgender'].', dob='.$_POST['txtdob'].', paddress='.trim($_POST['txtaddress']).', sub='.$_POST['txtsubject'].', rdate='.$_POST['txtdate'].' 
        
?>