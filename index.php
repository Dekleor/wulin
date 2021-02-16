<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Wulin</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/flexboxgrid.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/theme.css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

<?php
include 'pages/header.php';
?>

<div class="wrapper">
    <main>
        <?php
        include 'pages/personnages.php';
        ?>

        <hr>

        <?php
        include 'pages/personnalités.php';
        ?>

        <hr>

        <?php
        include 'pages/histoire.php';
        ?>

        <hr>

        <?php
        include 'pages/ecoles.php';
        ?>

        <hr>

        <?php
        include 'pages/legendes.php';
        ?>

    </main>
</div>

<script src="https://cdn.polyfill.io/v2/polyfill.min.js?callback=polyfillsAreLoaded" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/script.js" defer></script>
</body>
</html>