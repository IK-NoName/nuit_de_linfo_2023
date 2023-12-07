<?php

    $require = ["name"];
    $permission = new Permission("public");

    function run(array $params, Session_controller $session_controller, array $utils)
    {
        return $params["name"];
    }