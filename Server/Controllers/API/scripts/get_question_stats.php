<?php

$require = ["id_question"];
$permission = new Permission("public");

function run(array $params, mysqli $db, Session_controller $session_controller, array $utils)
{
    $id_question = $params["id_question"];
    $sql = "SELECT Question_stats.id_question, Question_stats.id_stat, Question_stats.value, Stat.name FROM Question_stats INNER JOIN Stat ON Question_stats.id_stat=Stat.id  where Question_stats.id_question = $id_question";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
}