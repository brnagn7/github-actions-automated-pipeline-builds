<?php
require_once 'SongHolder.php';
require_once 'Song.php';
require_once 'Playlist.php';

$song = new Song('yesser', 400);
$playlist = new Playlist();
$playlist->addSong($song);
var_dump($playlist->getSongs($song));