<?php
include('../conn.php');
$rollno = $_GET['sid'];


$sql = "SELECT * FROM `student_data` WHERE `s_rollno`='$rollno'";
$run = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($run);

$name = $row['s_name'];

$sql2 = "SELECT * FROM `user_mark` WHERE `s_name`='$name'";
$run2 = mysqli_query($con, $sql2);
$data = mysqli_fetch_assoc($run2);

//combine Table///


?>
<html>

<head>
  <title>Update Mark Detail</title>
  <link rel="stylesheet" href="../css/updatemark_form.css" type="text/css">
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

      <form method="post" action="update_mark_data.php">

        <table class="table">
          <h4>
            <tr>
              <th>Student Name: </th>
              <td><span class="span"><?php echo $row['s_name']; ?></span></td>
            </tr>
          </h4>
          <h4>
            <tr>
              <th>Student Rollno: </th>
              <td><span class="span"><?php echo $row['s_rollno']; ?></span></td>
            </tr>
          </h4>
          <h4>
            <tr>
              <th>Student Year: </th>
              <td><span class="span"><?php echo $row['s_year']; ?></span></td>
            </tr>
          </h4>
        </table>

        <table class="table1">
          <span>
            <h4 class="h_3">Exam Marks</h4>
          </span>
          <tr>
            <th>DAA</th>
            <th>OS</th>
            <th>BHR</th>
          </tr>
          <tr>
            <td>
              <input type='text' name='daa' value="<?php echo $data['daa']; ?>" class="th" required />
            </td>
            <td><input type='text' name='os' value="<?php echo $data['os']; ?>" class="th" /></td>
            <td><input type='text' name='bhr' value="<?php echo $data['bhr']; ?> " class="th" required /></td>
          </tr>
        </table>
        <table class="table2">
          <tr>
            <th>PT&RP</th>
            <th>DLD&MP</th>
          </tr>
          <tr>

            <td><input type='text' name='ptrp' value="<?php echo $data['ptrp']; ?> " class="th" required /></td>
            <td><input type='text' name='dldmp' value="<?php echo $data['dldmp']; ?> " class="th" required /></td>

          </tr>

        </table>

        <table class="table3">
          <tr>
            <td><input type="hidden" name="rollno" value="<?php echo $row['s_rollno']; ?>" /></td>
          </tr>

        </table>
        <input type="submit" name="submit" value="Submit" class="submit" />

      </form>
    </div>
  </div>

</body>

</html>