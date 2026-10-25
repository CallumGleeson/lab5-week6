<?php
include("dbcon.php");

$sql = "SELECT visit_date, visit_time, patient.Firstname, patient.Surname FROM visit INNER JOIN patient ON patient.id = visit.patient_id";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $visitDate = $row['visit_date'];
    $visitTime = $row['visit_time'];
    $firstname = $row['Firstname'];
    $surname = $row['Surname'];

    echo "<tr><td>$visitDate</td><td>$visitTime</td><td>$firstname</td><td>$surname</td></tr>";
}
?>