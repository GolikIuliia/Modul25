<?php
/**

 * @return PDO

 */

function get_connection()
{
    return new PDO('mysql:host=localhost;dbname=registration', 'root', 'root');
    //host=localhost;dbname=registration
}

function insert(array $data)
{
    $query = 'INSERT INTO users (name, email, password, created_at) VALUES(name, email, password, created_at)';
    file_put_contents("reg.txt", var_export($query, true), FILE_APPEND | LOCK_EX);
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

function getUsersList()
{
    $query = 'SELECT * FROM users ORDER BY id DESC';
    $db = get_connection();
    return $db->query($query,PDO::FETCH_ASSOC);

}