<?php

function checkAuth(string $login, string $password): bool
{
    $users = require __DIR__ . '/usersDb.php';

    foreach ($users as $user) {
        if ($user['login'] === $login && $user['password'] === $password) {
            return true;
        }
    }
    return false;
};

function getUserLogin(): ?string
{
    $loginFromCookie = $_COOKIE['login'] ?? '';
    $passwordFromCookie = $_COOKIE['password'] ?? '';
    if (checkAuth($loginFromCookie, $passwordFromCookie)) {
        return $loginFromCookie;
    } else {
        return null;
    }   
}

?>