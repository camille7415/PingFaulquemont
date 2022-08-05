<?php

if(session_status() !== 2)
    session_start();

?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta content="inital-scale=1.0, maximum-scale=1.0, user-scable=0" name="viewport" />
        <meta content="width=device-width" name="viewport" />

        <title>Inscriptions Tournoi national de Faulquemont</title>


        <link rel="stylesheet" href="/css/bootstrap.min.css">

        <link rel="stylesheet" href="/css/bootstrap-icons.css">
        <link rel="stylesheet" href="/css/datatables.min.css">
        <link rel="stylesheet" href="/css/rowGroup.dataTables.min.css">

    </head>

    <body>
        <?php
        include(dirname(__FILE__) . 'banner.php');
        ?>
        <main>

