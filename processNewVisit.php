<?php
include("dbcon.php");

$visitDate = $_POST['visitDate'];
$visitTime = $_POST['visitTime'];
$docid = $_POST['docid'];
$ptntid = $_POST['ptntid'];
$cost = $_POST['cost'];

$sql = "Insert into visit(visit_date,visit_time,doctor_id,patient_id,cost) values('$visitDate','$visitTime','$docid','$ptntid',$cost)";

echo $sql;
?>