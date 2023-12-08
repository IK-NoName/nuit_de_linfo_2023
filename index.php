<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<?php
    require "Server/Controllers/RoutesControllers/Route_controller.php";
    require "Server/Controllers/UsersControllers/Session_controller.php";
    require "Server/Controllers/UsersControllers/Permission_controller.php";

    $session_controller = new Session_controller();

    $router = new Route_controller("public/pages/guest/404.php", "public/pages/guest/auth.php", $session_controller);

    $router->config_routes_file("config/route_config.php");
    //$router->set_404();

    ?>