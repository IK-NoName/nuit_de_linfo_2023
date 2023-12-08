<?php

$require = ["id_user"];
$permission = new Permission("public");

function run(array $params, mysqli $db, Session_controller $session_controller, array $utils)
{
    $id_user = $params["id_user"];
    $sql = "SELECT User_stats.id_user, User_stats.id_stat, User_stats.value, Stat.name FROM User_stats INNER JOIN Stat ON User_stats.id_stat=Stat.id  where User_stats.id_user = $id_user";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}