<?php
require_once 'Song.php';

$song = new Song('Yesterday', 5);
$song->setRating(9);
print $song->getRating();