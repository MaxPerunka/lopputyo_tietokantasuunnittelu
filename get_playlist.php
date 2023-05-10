<?php
require "dbconnection.php";
$dbcon = createDbConnection();

$playlist_id = 5;

$sql = "SELECT Name, Composer FROM tracks, playlist_track WHERE playlist_track.PlaylistId = $playlist_id AND playlist_track.TrackId = tracks.TrackId";

$statement = $dbcon->prepare($sql);
$statement->execute();

$playlist_songs = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($playlist_songs as $playlist_song){
echo $playlist_song["Name"]." ";

echo $playlist_song["Composer"]."<hr>";
}