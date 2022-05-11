<?php

$mysqli = new mysqli("mysql:3306", 'root', 'm1ndfulness!', 'article_service') or die(mysqli_error($mysqli));

if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $body = $_POST['body'];
    //thumbnail_id = $_POST['thumbnail_id];는 아직...
    $mysqli->query("INSERT INTO articles (title, body) VALUES('$title', '$body')") or die($mysqli->error);
}