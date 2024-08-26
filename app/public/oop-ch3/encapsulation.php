<?php
require_once 'Song.php';
require_once 'Playlist.php';



$song = new Song('Yesterday', 100);

$beatlesSongs = new Playlist();
$beatlesSongs->addSong($song);

var_dump($beatlesSongs->getSongs());
