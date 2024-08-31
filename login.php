<?php
    require("conn.php");
?>
<html>

<head>
    <meta name="viewport" width="device-width , initial scale=1.0">
    <title>Result Management System</title>
    <link rel="stylesheet" href="css/logIn.css">
</head>

<body>
   
<div class="container">
        <div class="navbar">
            <img src="css/images/logo.jpg" class="logo">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="aboutus.html">About-us</a></li>
                    <li><a href="Contact.html">Contact-us</a></li>
                </ul>
            </nav>
        </div>
        
            <div class="login-content-header">
          <form action="login.php" method="post">
           <h1 class="login_heading">Admin Login</h1>
           <table class="form1">
            <tr>
            <th>Username </th>
            <td class="table"><input type="text" name="adminName" placeholder="Enter username" class="field1" required></td>  
            </tr> 
    
            <tr >
            <th>Password </th>
            <td class="table"><input type="password" name="password" placeholder="Enter Password" class="field1" required></td>
            </tr>   
            <tr>
            <td  colspan="2"><input type="submit" name="submit" value="LogIn" class="submit"/></td>
            </tr>
           </table>
          </form>
      </div>
            
    </div>

    <?php

    if(isset($_POST['submit']))
    {
        $query="SELECT * FROM `admin` WHERE `admin_name`='$_POST[adminName]' AND `admin_password`='$_POST[password]' ";
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)<1)
    {
        ?>
        <script>
        alert('Username or Password is incorrect');
        window.open('login.php','_self');
        </script>
       <?php
    }
        else
        {
            session_start();
            $_SESSION['uid']=$_POST['adminName'];
            header("location: admin/AdminPanel.php");
        }
        

    }
    ?>
</body>

</html>