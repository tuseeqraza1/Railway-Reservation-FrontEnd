<?php
$q = $_GET['trainID'];
// $q = ('5');

$conn = include('../includes/connect-db.inc.php');

$query="SELECT * FROM station_details WHERE train_id = '".$q."'";
$result = $conn->query($query);

$sr = 1;
echo 
"<table class='col-12 tableAlign' style=' margin-top:5em !important;'>
<tr class='bg-success' style='color:white;'>
<th style='text-align: center; vertical-align: middle; border-radius: 0.5em 0 0 0.5em !important;'>Sr #.</th>
<th style='text-align: center; vertical-align: middle;'>Train No</th>
<th style='text-align: center; vertical-align: middle;'>Station</th>
<th style='text-align: center; vertical-align: middle;'>Arival Time</th>
<th style='text-align: center; vertical-align: middle; border-radius: 0 0.5em 0.5em 0 !important;'>Departure Time</th>
</tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td style='text-align: center; vertical-align: middle;'>" . $sr++ . "</td>";
    echo "<td style='text-align: center; vertical-align: middle;'>" . $row['train_id'] . "</td>";
    echo "<td style='text-align: center; vertical-align: middle;'>" . $row['station_name'] . "</td>";
    echo "<td style='text-align: center; vertical-align: middle;'>" . $row['arrival_time'] . "</td>";
    echo "<td style='text-align: center; vertical-align: middle;'>" . $row['departure_time'] . "</td>";
    echo "</tr>";
}
echo "</table>";

$conn->close();
?>
