<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);
?>

<head>
    <title>La próxima película de Marvel</title>
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<main>
    <img src="<?= $data['poster_url'] ?>" alt="Poster de <?= $data['title'] ?>" width="300" style="margin-top: 100px">
    <h2>Esta es una modificación, a ver si aparece</h2>
    <section>
        <h1>La próxima película de Marvel</h1>
        <hgroup>
            <h2><?= $data['title'] ?></h2>
            <p>¡Estreno en <b> <?= $data['days_until'] ?></b> días!</p>
        </hgroup>
    </section>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>