<?php
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Germany" => "Berlin",
    "Japan" => "Tokyo",
    "France" => "Paris"
);

$twoDimArray = array();
foreach ($countries as $country => $city) {
    $twoDimArray[] = array($country, $city);
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Country</th><th>City</th></tr>";

foreach ($twoDimArray as $row) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
