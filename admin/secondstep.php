<html>
<head>
    
<link rel="stylesheet" href="../css/secondstep.css" type="text/css">
</head>
<body>
<div class="container">
        <div class="navbar">
            <img src="../css/images/logo.jpg" class="logo">
            <nav>
                <ul>
                    <li><a href="AdminPanel.php">Admin-Dashboard</a></li>
                </ul>
            </nav>

                <div class="ff">
                <li><a href="logout.php">LogOut</a></li>
                </div>
        </div>
    <div class="main-content-header">
        <h2>Step 2/2 : Add Exam mark</h2>
          <form method="post" action="thirdstep.php">
              
         
          <td><input type="hidden" name="name" class="name" value="<?php  echo $_POST['name']; ?>" required/></td>
          
          <td><input type="hidden" name="rollno" class="rollno" value="<?php  echo $_POST['rollno']; ?>" required/></td>
          <div class="alltable">
          <table class="table1">
              
             <tr>
                <th>DAA</th>   <th>OS</th> <th>BHR</th>
             </tr>
             <tr>
                 <td><input type='text' name='daa' placeholder='DAA' required/></td>
                 <td><input type='text' name='os' placeholder='OS' required/></td>
                 <td><input type='text' name='bhr' placeholder='BHR' required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>PT&RP</th>   <th>DLD&MP</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='ptrp' placeholder='PT&RP' required/></td>
                 <td><input type='text' name='dldmp' placeholder='DLD&MP' required/></td>
                 
             </tr>
             
         </table>
        <table class="table3">
             <tr>
             <td colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>   
             </tr>
             
        </table>
        </div>
         
       
        </form>
    </div>
</div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{ 
    include('../conn.php');
    $name = $_POST["name"];
    $rollno = $_POST["rollno"];
    $year = $_POST["year"];
    $branch = $_POST["branch"];
    $mobileno = $_POST["mobile"];
    $city = $_POST["city"];

    $sql="INSERT INTO `Student_data`(`s_name`, `s_rollno`, `s_year`, `s_branch`, `s_mobilno`, `s_city`) VALUES ('$name','$rollno','$year','$branch','$mobileno','$city')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second  Step');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>