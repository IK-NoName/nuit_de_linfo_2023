<?php

    require "EnvLoader/EnvLoader.php";
    require "Controllers/API/Request_controller.php";
    require "Controllers/UsersControllers/Session_controller.php";
    require "Controllers/UsersControllers/Permission_controller.php";
    /**
     * @var $db
     */
    require "Controllers/Db_controller.php";

    $env = realpath(__DIR__ . '/.env');

    $env_loader = new EnvLoader($env);
    $env_loader->load_env();


    $session_controller = new Session_controller();
    $data = [];
    if(isset($_GET["request"]))
    {
        $data = $_GET;
    }
    else if(isset($_POST["request"]))
    {
        $data = $_POST;
    }

    $request_controller = new Request_controller($data,  $db, $session_controller,  "Controllers/API/scripts");
    $request_controller->handle_request();
