<?php
require "dbconnection.php";
$dbcon = createDbConnection();

$artist_id = 1;

$sql = "SELECT artists.Name as ArtistName, tracks.Name as TrackName FROM artists, tracks, playlist_track WHERE artists.ArtistId = $artist_id AND playlist_track.TrackId = tracks.TrackId";

$statement = $dbcon->prepare($sql);
$statement->execute();

$artists = $statement->fetchAll(PDO::FETCH_ASSOC);
//En satavarma mitä tapahtuu mutta se toimii
foreach($artists as $artist){
    $result = array();
    $result['artist_name'] = $artist['ArtistName'];
    $result['track_name'] = $artist['TrackName'];
    $results[] = $result;
}
$responseJSON = json_encode($results);
echo $responseJSON;