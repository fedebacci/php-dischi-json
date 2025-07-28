<?php
$new_title = $_POST['title'];
$new_artist = $_POST['artist'];
$new_year_published = $_POST['year_published'];
$new_cover_url = $_POST['cover_url'];
$new_genre = $_POST['genre'];
// var_dump($new_title);
// var_dump($new_artist);
// var_dump($new_year_published);
// var_dump($new_cover_url);
// var_dump($new_genre);

$new_cd = ["title"=>$new_title,"artist"=>$new_artist,"year_published"=>$new_year_published,"cover_url"=>$new_cover_url,"genre"=>$new_genre];
// var_dump($new_cd);


$json_cds = file_get_contents('./cds.json');
// var_dump($json_cds);

$cds = json_decode($json_cds, true);
$cds[] = $new_cd;
// var_dump($cds);

$json_cds_updated = json_encode($cds);
// var_dump($json_cds_updated);

file_put_contents('./cds.json', $json_cds_updated);

header('Location: ./index.php');


?>