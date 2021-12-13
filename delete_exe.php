<?php   
    $id = $_POST['txtid'];
    if(isset($_POST['cmddelete']))
    {
        require_once ("conn.php");
        $id = $_POST['txtid'];
        $query = mysqli_query($conn, "DELETE FROM tbl_student WHERE stuid=".$id);
        $result = mysqli_query($conn,$query);
        if($result);
        {
            header("location:index2.php");
        }
    }
        
?>