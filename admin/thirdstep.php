<html>
<head>
    <title>Homepage</title>
<link rel="stylesheet" href="../csss/addmark.css" type="text/css">
</head>
<body>
<div class="container">
       
       <div class="header">
           <img class="logo" src="../css/images/logo.jpg" alt="logo">
           <nav>
               <ul class="nav">
                   <li><a href="../index.php">Home</a></li>
                   <li><a href="#">About-us</a></li>
                   <li> <a href="logout.php">Log Out </a></li>
               </ul>
           </nav>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include('../conn.php');
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$daa=$_POST['daa'];
$os=$_POST['os'];
$bhr=$_POST['bhr'];
$ptrp=$_POST['ptrp'];
$dldmp=$_POST['dldmp'];

$sql="INSERT INTO `user_mark`(`s_name`,`s_rollno`,`daa`, `os`, `bhr`, `ptrp`, `dldmp`) VALUES ('$name','$rollno','$daa','$os','$bhr','$ptrp','$dldmp')";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Inserted Succesfully');
        window.open('adminPanel.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }
}
?>
