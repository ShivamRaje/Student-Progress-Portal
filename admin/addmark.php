<html>

<head>
    <title>Add Marks</title>
    <link rel="stylesheet" href="../css/addMarkss.css" type="text/css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="../css/images/logo.jpg" class="logo">
            <nav>
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
            <h2>Step 1/2 : Enter the Details of Student</h2>
            <form method="post" enctype="multipart/form-data" action="secondstep.php">
                <table class="table1">
                    <tr>
                        <th>Name </th>
                        <th> Roll No</th>
                        <th>year</th>
                    </tr>
                    <tr>
                        <td><input type='text' name='name' placeholder='Enter Full Name' required class="box" /></td>
                        <td><input type='text' name='rollno' placeholder='Rollno' required class="box" /></td>
                        <td><input type='text' name='year' placeholder='year' required class="box" /></td>

                    </tr>
                </table>
                <table class="table2">
                    <tr>
                        <th>Branch </th>
                        <th>Mobile No</th>
                        <th>Your City</th>
                    </tr>
                    <tr>
                        <td><input type='text' name='branch' placeholder="branch" required class="box" /></td>
                        <td><input type='number' name='mobile' placeholder='Mobile No' required class="box" /></td>
                        <td><input type='text' name='city' placeholder='City' required class="box" /></td>
                    </tr>

                </table>

                <table class="table3">
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Next" class="next_Step" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>