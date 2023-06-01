<?php

file_put_contents("reg1.txt", var_export($_POST, true), FILE_APPEND | LOCK_EX);

function register(array $data)
{
    $values = [
        $data['name'],
        $data['email'],
        password_hash($data['password'], PASSWORD_ARGON2ID),
        (new DateTime())->format('Y-m-d H:i:s')
    ];
    return insert($values);
}
