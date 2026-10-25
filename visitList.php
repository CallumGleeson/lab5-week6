<?php
include("dbcon.php");

$sql = "select * from visit";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $visitDate = $row['visit_date'];
    $visitTime = $row['visit_time'];
    $patientId = $row['patient_id'];

    echo "<tr><td>$visitDate</td><td>$visitTime</td><td>$patientId</td></tr>";
}
?>