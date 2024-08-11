<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="excel.css" type="text/css">

</head>

<body>

    <div class="container">
        <div class="navbar">
            <img src="images/logo.jpg" class="logo">
            <nav>
                <ul>
                    <li><a href="../AdminPanel.php">Admin-Dashboard</a></li>
                </ul>
            </nav>

            <div class="ff">
                <li><a href="../logout.php">LogOut</a></li>
            </div>
        </div>

        <form method="post" action="import.php" enctype="multipart/form-data">
            <input type="file" name="excel_file" accept=".csv" class="file">
            <input type="submit" name="import" value="Import" class="submit">
        </form>
        <table class="table">
            <tr>
                <th>roll no</th>
                <th>name</th>
                <th>email</th>
                <th>mobile</th>
                <th>daa</th>
                <th>os</th>
                <th>bhr</th>
                <th>mp</th>
                <th>ptbr</th>
            </tr>
            <?php
            $db = mysqli_connect('localhost', 'root', '', 'result');
            $query = "SELECT * FROM students";
            $row = mysqli_query($db, $query);

            while ($data = mysqli_fetch_array($row)) {
            ?>
                <tr>
                    <td><?= $data['roll_no'] ?></td>
                    <td><?= $data['name'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['mobile'] ?></td>
                    <td><?= $data['daa'] ?></td>
                    <td><?= $data['os'] ?></td>
                    <td><?= $data['bhr'] ?></td>
                    <td><?= $data['mp'] ?></td>
                    <td><?= $data['ptbr'] ?></td>
                </tr>
            <?php
            }
            ?>

        </table>
    </div>
</body>

</html>