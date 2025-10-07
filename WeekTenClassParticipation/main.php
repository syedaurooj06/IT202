<body>

<?php
$servername = "sql1.njit.edu";
$username = "ssu23";
$password = "Bellyflop0624!";
$dbname = "ssu23";
$con = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studId = $_POST["idVar"];

    $sql = "SELECT ID FROM WeekNineStudentTable WHERE ID = $studId";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["studentId"] = $studId;
        header("Location: side.php");
        exit;
    } else {
        echo '<script>alert("STUDENT ID NOT FOUND. Please re-enter.");</script>';
    }
}
?>

<form method="POST" action="main.php">
    <label for="idVar">Student ID:</label>  
    <input type="text" name="idVar" id="idVar"><br>
    <button type="submit" name="sub">Submit</button>
</form>

</body>