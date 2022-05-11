<?php

$mysqli = new mysqli("mysql:3306", 'root', 'm1ndfulness!', 'article_service') or die(mysqli_error($mysqli));

if (isset($_POST['title']) && isset($_POST['body'])){
    $title = $_POST['title'];
    $body = $_POST['body'];
    $editor_id = 1;
   
    //thumbnail_id = $_POST['thumbnail_id];는 아직..
    $mysqli->query("INSERT INTO articles (editor_id, title, body) VALUES('$editor_id', '$title', '$body')") or die($mysqli->error);
}