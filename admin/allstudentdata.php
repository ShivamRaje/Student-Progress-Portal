<html>
<head>
    <title>All Student Detail</title>
<link rel="stylesheet" href="../css/allstudentdat.css" type="text/css">

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
        <h2>Student Record</h2>
        <form>
         <table class="table">
          <tr>
                <th class="student_id">Id</th>
                <th class="student_class">Name</th>
                <th class="student_class">RollNo</th>
                <th class="student_class">Year</th>
                <th class="student_class">Branch</th>
                <th class="student_class">Mobile No</th>
                <th class="student_class">City</th>
         </tr>
        
<?php
include('../conn.php');
  $sql="SELECT * FROM `student_data`";
  $run=mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>
        <tr>
            <th class="student_class2"> <?php  echo $row['id'].'<br>'; ?></th>
            <th class="student_class2"> <?php  echo $row['s_name'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $row['s_rollno'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $row['s_year'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $row['s_branch'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $row['s_mobilno'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $row['s_city'].'<br>'; ?></th> 
        </tr>     
        <?php    
        }
   
}
else{
    echo "No Record Found";
}

?>
              </table>
        </form>
      </div>
</div>
</body>
</html>