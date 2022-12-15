<?php

include_once('config/url.php');
include_once('config/process.php');

// Limpa a mensagem
if (isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/fontawesome.all.min.css" />
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
    <title>E-mails</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= $BASE_URL ?>/index.php">
                <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Email">
            </a>
            <div>
                <div class="navbar-nav">
                    <a class="nav-link" id="home-link" href="<?= $BASE_URL ?>/index.php">Home</a>
                    <a class="nav-link" id="home-link" href="<?= $BASE_URL ?>/create.php">Inserir e-mail</a>
                </div>
            </div>
        </nav>
    </header>