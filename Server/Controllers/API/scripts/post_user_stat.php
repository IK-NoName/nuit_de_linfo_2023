<?php

$require = ["id_question", "id_stat", "value", "response"];
$permission = new Permission("guest");

function run(array $params, mysqli $db, Session_controller $session_controller, array $utils)
{
    $id_user = $session_controller->get_id();
    $id_stat = $params["id_stat"];
    $id_question = $params["id_question"];
    $value = $params["value"];
    $question_response = $params["response"];

    $sql = "select * from Question where id = $id_question";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
    if($res != null)
    {

        $response = $res["response"];
        if($response == intval($question_response))
        {
            echo "la réponse est bonne \n\n";
            $sql = "select * from User_stats where id_user = $id_user and id_stat = $id_stat";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $res = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
            if($res == NULL)
            {
                $sql = "INSERT INTO `User_stats` (`id`, `id_user`, `id_stat`, `value`) VALUES (NULL, '$id_user', '$id_stat', '-$value');";
                $stmt = $db->prepare($sql);
                return $stmt->execute();
            }
            else
            {
                $new_value = $res["value"] + $value;
                $sql = "UPDATE `User_stats` SET `value`=$new_value WHERE id_user=$id_user and id_stat = $id_stat";
                $stmt = $db->prepare($sql);
                return $stmt->execute();
            }

        }
        else
        {
            echo "réponse pas bonne \n\n";
            $sql = "select * from User_stats where id_user = $id_user and id_stat = $id_stat";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $res = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
            if($res == NULL)
            {
                $sql = "INSERT INTO `User_stats` (`id`, `id_user`, `id_stat`, `value`) VALUES (NULL, '$id_user', '$id_stat', '-$value');";
                $stmt = $db->prepare($sql);
                return $stmt->execute();
            }
            else
            {
                var_dump($res["value"]);
                $new_value = $res["value"] - $value;
                var_dump($new_value);
                $sql = "UPDATE `User_stats` SET `value`=$new_value WHERE id_user=$id_user and id_stat = $id_stat";
                $stmt = $db->prepare($sql);
                return $stmt->execute();
            }
        }
    }
    else{
        return false;
    }

}