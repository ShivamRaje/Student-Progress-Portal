<html>
<head>
    <title>Update Record</title>
<link rel="stylesheet" href="../css/updatemark.css" type="text/css">
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
        <form method="post" action="updatemark.php">
        <table class="table1">
            <h1 align="center">Search Student and Update Marks</h1>
            
            <th>Enter Name : </th>
            <td><input type="text" name="name" class="box"/></td>
            
            <th>Student Rollno : </th>
            <td><input type="text" name="rollno" class="box"/></td>

            </table>
            <input type="submit" value="Search" name="submit" class="submit"/>

         <table class="table2">
              <tr> 
                <th class="student_id">Id</th>
                <th class="student_class">Name</th>
                <th class="student_class">Roll No</th>
                <th class="student_class">Year</th>
                <th class="student_class">Branch</th>
                <th class="student_class">Mobile No</th>
                <th class="student_edit">City</th>
                <th class="student_edit">Edit</th>
            </tr>
         <?php
            if(isset($_POST['submit']))
            {
                include('../conn.php');
                $name=$_POST['name'];
                $rollno=$_POST['rollno'];
                
                $sql="SELECT * FROM `student_data` WHERE `s_name`='$name'  AND `s_rollno`='$rollno' ";
                $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)<0)
                {
                     ?>
                     <script>
                     alert('No Record Found');
                     </script>
                    <?php
                }
                else
                {
                    
                 while($data=mysqli_fetch_assoc($run))  
                 {
                    
             ?>
            <tr>
            <th class="student_class2"> <?php  echo $data['id'].'<br>'; ?></th>
            <th class="student_class2"> <?php  echo $data['s_name'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['s_rollno'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['s_year'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['s_branch'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['s_mobilno'].'<br>'; ?></th> 
            <th class="student_class2"> <?php  echo $data['s_city'].'<br>'; ?></th> 
            <th class="student_class2"><a href="updatemark_form.php?sid=<?php echo $data['s_rollno']; ?>">Edit</a></th> 
           
           </tr>    
              
               <?php  
                 }
                    
                }
               
            }
            
            ?>
              </table>   
      </form>
 </div>
</div>
    
</body>
</html>