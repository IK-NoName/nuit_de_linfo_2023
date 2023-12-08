<?php

    $require = ["login", "password", "mail"];
    $permission = new Permission("guest");

    function run(array $params, mysqli $db, Session_controller $session_controller, array $utils)
    {
        $login = $params["login"];
        $password = $params["password"];
        $mail = $params["mail"];

        $sql = "select * from User where login = '$login' or mail = '$mail'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $res = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
        if($res != NULL)
        {
            return false;
        }
        else
        {
            $sql = "INSERT INTO `User` (`id`, `login`, `mail`, `password`, `id_type`) VALUES (NULL, '$login', '$mail', '$password', 1);";
            $stmt = $db->prepare($sql);
            $res = $stmt->execute();
            return $res;
        }
    }