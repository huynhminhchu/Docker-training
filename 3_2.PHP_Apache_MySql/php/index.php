<?php
$host = 'db'; //service name from docker-compose.yml
$user = 'minhchu';
$password = 'minhchu';
$db = 'test_db'; //name of db

$conn = new mysqli($host,$user,$password,$db);
if ($conn->connect_error){
  echo 'connection failed' . $conn->connect_error;
}
echo 'Successfully connected to mysql';

?>
