<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "happiness by country";

// Create a connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// selects table happiness per country
$sql = "SELECT * FROM `happiness per country`";
$result = $conn->query($sql);

// retrieves all headers and data from
if (mysqli_num_rows($result) > 0) {
  $rankingArray = array();  
      while($rows = mysqli_fetch_assoc($result)) {
          extract($rows);
          $rankingRow = array(
              "Ranking" => $rows['Overall rank'],
              "Country" => $rows['Country or region'],
              "Scored" => $rows['Score'],
              "GDP" => $rows['GDP per capita'],
              "Social support" => $rows['Social support'],
              "Life expectancy" => $rows['Healthy life expectancy'],
              "Freedom to make choices" => $rows['Freedom to make life choices'],
              "Generosity" => $rows['Generosity'],
              "Corruption" => $rows['Perceptions of corruption'],
              "Latitude" => $rows['Lat'],
              "Longitude" => $rows['Lng']
          );
          array_push($rankingArray, $rankingRow);
      }
} 
else {
  echo "no results";
}
echo json_encode($rankingArray);
$conn->close();
?>