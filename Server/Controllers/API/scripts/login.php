<?php

    $require = ["login", "password"];
    $permission = new Permission("guest");

    function run(array $params, mysqli $db, Session_controller $session_controller, array $utils)
    {
        $login = $params["login"];
        $password = $params["password"];
        $sql = "SELECT * from User WHERE login = '$login' and password = '$password'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $res = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        if(isset($res[0]))
        {
            $account = $res[0];
            $sql = "select * from Type where id = " . $account["id_type"];
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $res = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
            if($res != NULL)
            {
                var_dump($res);
                $session_controller->authentifie(intval($account["id"]), $account["login"], $account["mail"], new Permission($res["name"]));
                return true;
            }
            else{
                return false;
            }
        }
        else
        {
            return false;
        }
    }