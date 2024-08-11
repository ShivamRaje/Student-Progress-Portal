<?php
if(isset($_POST['submit']))
{
include('../conn.php');
    $rollno=$_POST['rollno'];
    $daa=$_POST['daa'];
    $os=$_POST['os'];
    $bhr=$_POST['bhr'];
    $ptrp=$_POST['ptrp'];
    $dldmp=$_POST['dldmp'];
    
    
    $sql="UPDATE `user_mark` SET  `daa` = '$daa', `os` = '$os', `bhr` = '$bhr', `ptrp` = '$ptrp', `dldmp` = '$dldmp' WHERE `s_rollno` = '$rollno'";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Updated  Succesfully');
        window.open('updatemark_form.php?sid=<?php echo $rollno; ?>', '_self');
             </script>
       
       
        <?php
    }
    else
    {
        echo "Error";
    }
}
?>