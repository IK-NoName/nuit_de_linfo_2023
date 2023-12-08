<?php

$require = [];
$permission = new Permission("public");

function run(array $params, mysqli $db, Session_controller $session_controller, array $utils)
{
    $sql = "select * from Question";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}