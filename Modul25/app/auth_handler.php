<?
require_once "db.php";

file_put_contents("auth4.txt", var_export($_POST, true), FILE_APPEND | LOCK_EX);

function authtorization($name)
{
    return getUserByName($name); // Мы случайно передали имя и пароль, а нужно отправлять только имя, см. db.php строку 43
}

$user=authtorization($_POST['name']); 
// После этого нужно организовать проверку на правильность пароля. 
// На всякий случай объясню, что лучше не стоит говорить пользователю, конкретно что он ввёл неправильно: имя или пароль. 

file_put_contents("auth3.txt", var_export($user, true), FILE_APPEND | LOCK_EX);

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