<?php
require("conn.php");
session_start(); // Start session at the beginning
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="Contact.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>

        <div class="login-content-header">
            <form action="" method="post">
                <h1 class="login_heading">Admin Login</h1>
                <table class="form1">
                    <tr>
                        <th>Username</th>
                        <td><input type="text" name="adminName" placeholder="Enter username" class="field1" required></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="password" name="password" placeholder="Enter Password" class="field1" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="LogIn" class="submit" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $adminName = mysqli_real_escape_string($con, $_POST['adminName']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $query = "SELECT * FROM `admin` WHERE `admin_name`='$adminName' AND `admin_password`='$password'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) < 1) {
            echo "<script>
                    alert('Username or Password is incorrect');
                    window.open('login.php', '_self');
                  </script>";
        } else {
            $_SESSION['uid'] = $adminName;
            header("Location: admin/AdminPanel.php");
            exit();
        }
    }
    ?>
</body>

</html>
