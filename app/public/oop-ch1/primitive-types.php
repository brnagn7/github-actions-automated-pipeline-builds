<?php
// boolean
// integer
// float
// string
// object
//resource
// array
// null
declare(strict_types=1);

require_once 'Song.php';

$song = new Song('Blackbird', 9);

var_dump($song->name);
