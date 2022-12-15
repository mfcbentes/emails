<?php

session_start();

include_once("connection.php");
include_once("url.php");

$emails = [];

$query = "SELECT * FROM email";

$stmt = $conn->prepare($query);

$stmt->execute();

$emails = $stmt->fetchAll();
