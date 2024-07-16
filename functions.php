<?php

declare(strict_types=1);


function render_template(string $template, array $data = [])
{
    extract($data);
    require "templates/$template.php";
}


function get_data(string $url): array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{
    return match (true) {
        $days === 0 => "Es hoy! Es hoy!!",
        $days === 1 => "Sólo 1 día!",
        $days < 7 => "Esta semanita!!",
        $days < 31 => "Este mes!!",
        default => "Faltan $days días"
    };
}
