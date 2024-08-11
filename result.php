<?php
if (isset($_POST['submit'])) {

    include('conn.php');

    $standerd = $_POST['name'];
    $rollno = $_POST['rollno'];
    $sql = "SELECT * FROM `student_data` WHERE `s_name`='$standerd' AND `s_rollno`='$rollno'";
    $sql2 = "SELECT * FROM `user_mark` WHERE `s_name`='$standerd' AND `s_rollno`='$rollno'";
    $run = mysqli_query($con, $sql);
    $run2 = mysqli_query($con, $sql2);
    $row = mysqli_num_rows($run2);
    $data2 = mysqli_fetch_assoc($run2);

    if (mysqli_num_rows($run) > 0) {
        $data = mysqli_fetch_assoc($run);
?>
        <html>

        <head>
            <title>Result</title>
            <link rel="stylesheet" href="css/resultt.css">
        </head>

        <body>

            <div class="container">
                <div class="navbar">
                    <img src="css/images/logo.jpg" class="logo">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="main-content-header">
                    <form method="post" action="result.php">
                        <table class="table">
                            <tr>
                                <th>Name :</th>
                                <td><?php echo $data['s_name'] ?></td>
                            </tr>
                            <tr>
                                <th>Roll No :</th>
                                <td><?php echo $data2['s_rollno']; ?></td>
                            </tr>
                            <tr>
                                <th>year :</th>
                                <td><?php echo $data['s_year']; ?></td>
                            </tr>
                            <tr>
                                <th>Branch :</th>
                                <td><?php echo $data['s_branch']; ?></td>
                            </tr>
                            <tr>
                                <th>Mobile No :</th>
                                <td><?php echo $data['s_mobilno']; ?></td>
                            </tr>
                            <tr>
                                <th>Your City :</th>
                                <td><?php echo $data['s_city']; ?></td>
                            </tr>
                        </table>
                        <table class="table2">
                            <tr>
                                <th>Suject</th>
                                <th>Score</th>
                                <th>Max. Marks</th>
                            </tr>
                            <tr>

                                <th>DAA</th>
                                <th><?php echo $data2['daa']; ?></th>
                                <th>20</th>
                            </tr>
                            <tr>
                                <th>OS</th>
                                <th><?php echo $data2['os']; ?></th>
                                <th>20</th>
                            </tr>
                            <tr>
                                <th>BHR</th>
                                <th><?php echo $data2['bhr']; ?></th>
                                <th>20</th>
                            </tr>
                            <tr>
                                <th>PT&RP</th>
                                <th><?php echo $data2['ptrp']; ?></th>
                                <th>20</th>
                            </tr>
                            <tr>
                                <th>DLD&MP</th>
                                <th><?php echo $data2['dldmp']; ?></th>
                                <th>20</th>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th>
                                    <?php echo $data2['daa'] + $data2['os'] + $data2['bhr'] + $data2['ptrp'] + $data2['dldmp']; ?>
                                </th>
                                <th>100</th>
                            </tr>

                        </table>
                    </form>
                </div>
            </div>
        </body>

        </html>
    <?php
    } else {
    ?>
        <script>
            alert('Record Not found');
            window.open('index.php', '_self');
        </script>
<?php
    }
}

?>