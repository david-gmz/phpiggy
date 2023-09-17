<?php

declare(strict_types=1);

// Sugar functions
function dd(mixed $value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function e($value)
{
    return htmlspecialchars((string) $value);
}
