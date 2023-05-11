<?php
require "dbconnection.php";
$dbcon = createDbConnection();
$body = file_get_contents("artist.json");
$artist = json_decode($body, true);

$sql = "INSERT INTO artists (Name) VALUES('$artist[Name]')";

$dbcon->exec($sql);