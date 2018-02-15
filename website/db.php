<?php

$dbHostname = 'localhost';
$dbDatabase = 'miguel_besosa';
$dbUsername = 'miguel.besosa';
$dbPassword = '0604';

$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);

//queryone();

function getResultFromSQL($sql, $values = []) {
    global $db;
    
    $stmt = $db->prepare($sql);
    $stmt->execute($values);
    
    return $stmt->fetchAll();
}

function queryone() {
    global $sql;
    $sql = 'SELECT * FROM users';

    foreach ($GLOBALS['db']->query($sql) as $rec) {
   echo '<pre>' . print_r($rec, true) . '</pre>';
}
}

?>
