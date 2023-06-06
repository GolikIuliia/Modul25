<?php
require_once "db.php";
file_put_contents("auth1.txt", var_export($_POST, true), FILE_APPEND | LOCK_EX);

function authtorization(array $data)
{
    $values = [
        $data['name'],
        password_hash($data['password'], PASSWORD_ARGON2ID)
       //(new DateTime())->format('Y-m-d H:i:s')
    ];
    return getUserByName($values);
}

$user=authtorization($_POST);
//file_put_contents("auth.txt", var_export($user, true), FILE_APPEND | LOCK_EX);

function validate(array $request)
{
    $errors = [];
    if (!isset($request['name']) || empty($request['name'])) {
        $errors[]['name'] = 'Имя не указано';
    }
    if (!isset($request['password']) || empty($request['password'])) {
        $errors[]['password'] = 'Пароль не указан';
    }
    
    return $errors;
}

header('Location: http://localhost/galery');
exit;