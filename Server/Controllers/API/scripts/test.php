<?php

    $require = ["name"];
    $permission = new Permission("public");

    function run(array $params, mysqli $bd, Session_controller $session_controller, array $utils)
    {
        return $params["name"];
    }