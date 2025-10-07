<!-- Access to webpage: https://web.njit.edu/~ssu23/WeekThirteenClassParticipation/index.php -->

<body>

    <?php

        $con = mysqli_connect($servername, $username, $password, $dbname);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            session_start();
            $studentName = $_POST["nameVar"];
            $sql = "SELECT * FROM WeekNineStudentTable WHERE Name='" . $studentName . "'";
            $result = $con->query($sql);

            // Names are Syeda, Hemadharshinii, Ruvan, Katherine

            echo "<table border = '1'>";
            echo '<tr> 
                    <th>Name</th>
                    <th>ID</th>
                    <th>Major</th>
                </tr>';

            if ($result->num_rows != 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row["Name"] . '</td>';
                    echo '<td>' . $row["ID"] . '</td>';
                    echo '<td>' . $row["Major"] . '</td>';
                    echo '</tr>';
                }
            } 

            echo '</table>';
        }
    ?>

    <form method="POST" action="index.php">
        <label for="nameVar">Student Name: </label>
        <input type="text" name="nameVar" id="nameVar"><br>
        <button type="submit" name="sub">Submit</button>
    </form>


</body>
