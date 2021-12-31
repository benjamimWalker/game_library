<?php
session_start();
if (!isset($_SESSION['user']))
{
    $_SESSION['user'] = "";
    $_SESSION['name'] = "";
    $_SESSION['type'] = "";
}

function generateHash(string $password): string
{
    return password_hash(implode(array_map(fn($letter) => chr(ord($letter) + 1), str_split($password))),
        PASSWORD_DEFAULT);
}

function testHash(string $password, string $hash): string
{
    $ok = password_verify($password, $hash);
    return $ok;
}