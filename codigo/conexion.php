<?php

$mysqli = new mysqli("localhost", "root", "", "bestiario");
if ($mysqli->connect_errno) {
    echo "Fallo al conectarm a MySQL: (", $mysqli->connect_errno, ")", $mysqli->connect_error;
}