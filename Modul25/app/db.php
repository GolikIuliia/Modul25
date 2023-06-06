<?php
/**

 * @return PDO

*/
$_MYSQL_SETTINGS = array(); 
$_MYSQL_SETTINGS['DB_HOST'] = 'localhost'; 
$_MYSQL_SETTINGS['DB_PASS'] = 'root'; 
$_MYSQL_SETTINGS['DB_USER'] = 'root';  
$_MYSQL_SETTINGS['DB_NAME'] = 'registration';

function get_connection()
{
    return new PDO('mysql:host=localhost;dbname=registration', 'root', 'root');
    
    //host=localhost;dbname=registration
    //'mysql:host=127.0.0.1;dbname=registration'
}

function insert(array $data)
{
    $query = 'INSERT INTO users (name, email, password, created_at) VALUES(?, ?, ?, ?)';
    file_put_contents("log_send.txt", "отправлено", FILE_APPEND | LOCK_EX);
    $db = get_connection();
    $stmt = $db->prepare($query);
    return $stmt->execute($data);
}

function getUserByEmail(string $email)
{
    $query = 'SELECT * FROM users WHERE email = ?';
    $db = get_connection();
    $stmt = $db->prepare($query);
    $stmt->execute([$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        return $result;
    }
    return false;
}

function getUserByName(string $name)
{
    file_put_contents("auth.txt", var_export($result, true), FILE_APPEND | LOCK_EX);
    $query = 'SELECT * FROM users WHERE name = ?';
    $db = get_connection();
    $stmt = $db->prepare($query);
    $stmt->execute([$name]);
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    

    if ($result) {
        return $result;
    }
    return false;
}

function getUsersList()
{
    $query = 'SELECT * FROM users ORDER BY id DESC';
    $db = get_connection();
    return $db->query($query, PDO::FETCH_ASSOC);
}