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

if (!isset($_SESSION["studentId"])) {
    header("Location: main.php");
    exit;
}

$studId = $_SESSION["studentId"];

$sql = "SELECT Name, StudentID, Major, Course, Grade 
        FROM WeekNineStudentTable 
        INNER JOIN WeekNineTranscriptTable 
        ON ID = StudentID
        WHERE StudentID = $studId";

$result = $con->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Major</th>
        <th>Course</th>
        <th>Grade</th>
      </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>$row[Name]</td>
            <td>$row[StudentID]</td>
            <td>$row[Major]</td>
            <td>$row[Course]</td>
            <td>$row[Grade]</td>
          </tr>";
}

echo "</table>";

echo '<br><button onclick="window.location.href=\'main.php\'">Home</button>';
?>

</body>
