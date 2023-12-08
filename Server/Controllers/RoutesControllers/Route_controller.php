<?php


class Route_controller
{
    private string $_PAGE_NOT_FOUND;
    private string $_NOT_AUTHORIZED;
    private Session_controller $_SESSION_CONTROLLER;

    private bool $_INCLUDE;
    public function __construct(string $not_found_path, string $not_authorized_path, Session_controller $session_controller)
    {
        $this->_PAGE_NOT_FOUND = $not_found_path;
        $this->_NOT_AUTHORIZED = $not_authorized_path;
        $this->_SESSION_CONTROLLER = $session_controller;
        $this->_INCLUDE = false;
    }

    public function add_route(string $name, string $file_path, Permission $permission = new Permission("guest"),  $params = 0): void
    {

        if($name == "*")
        {
            include $this->_PAGE_NOT_FOUND;
        }

        $url = filter_var($_GET["url"], FILTER_SANITIZE_URL);
        if($params == 0)
        {
            if($url == $name)
            {
                $this->_INCLUDE = true;
                if(!file_exists($file_path))
                {
                    include $this->_PAGE_NOT_FOUND;
                }
                else if($this->_SESSION_CONTROLLER->get_permission()->is_authorized($permission))
                {
                    $session_controller = $this->_SESSION_CONTROLLER;
                    include($file_path);
                }
                else
                {
                    include($this->_NOT_AUTHORIZED);
                }
            }
        }

        else
        {
            $uri = explode('/', $url);
            $name_array = explode('/', $name);
            if(count($name_array) == count($uri))
            {
                $split_uri = array_chunk($uri, count($uri) - $params);
                $split_name = array_chunk($name_array, count($name_array) - $params);


                $params_url = $split_uri[1];
                $path = implode("/", $split_uri[0]);

                $params_name = $split_name[1];
                $path_name = implode("/", $split_name[0]);

                $params_array = [];
                for($i = 0; $i < count($params_url); $i ++)
                {
                    $params_array[$params_name[$i]] = $params_url[$i];
                }
                $parameters = $params_array;

                if($path == $path_name)
                {
                    $this->_INCLUDE = true;
                    if(!file_exists($file_path))
                    {
                        include $this->_PAGE_NOT_FOUND;
                    }
                    else if($this->_SESSION_CONTROLLER->get_permission()->is_authorized($permission))
                    {
                        $session_controller = $this->_SESSION_CONTROLLER;
                        include($file_path);
                    }
                    else
                    {
                        include($this->_NOT_AUTHORIZED);
                    }
                }
                else
                {
                    echo "c pas bon";
                }
            }
        }
    }

    public function config_routes_file(string $file_path) : void
    {
        if(file_exists($file_path))
        {
            include_once $file_path;
            /**
             * @var $routes array tableau de config des routes
             */

            if(isset($routes))
            {

                foreach ($routes as $route)
                {
                        isset($route["params"]) ? $params = count($route["params"]) : $params = 0;
                        isset($route["name"]) ? $name = $route["name"] : $name = "undefined";
                        isset($route["file"]) ? $file = $route["file"] : $file = "undefined";
                        isset($route["permission"]) ? $permission = $route["permission"] : $permission = new Permission("guest");


                        $this->add_route($name, $file, $permission, $params);
                }
            }
        }
    }

    public function config_routes_dir(string $dir_path, string $dir_name, int $step = 0): void
    {
        $dir = scandir($dir_path);
        foreach ($dir as $file)
        {
            if($file != "." && $file != "..")
            {
                $new_path = $dir_path . "/" . $file;
                if(!str_contains($file, "."))
                {
                    $this->config_routes_dir($new_path, $file, $step + 1);
                }
                else
                {
                    $preview = explode("/", $dir_path);
                    $preview = array_chunk($preview, count($preview) - $step)[1];
                    $name = $preview[0] . "/" . explode(".", $file)[0];
                    if(str_contains($file, "*"))
                    {
                        $name_int = explode("*", $name);
                        $name_array = array_chunk($name_int, 1)[0];
                        $params = array_chunk($name_int, 1)[1];

                        $name_string = $name_array[0];
                        $nb = count($params);


                        $this->add_route($name_string . "/" . implode("/", $params), $new_path, new Permission($dir_name), $nb);

                    }
                    else
                    {
                        $this->add_route($name, $new_path, new Permission($dir_name));
                    }
                }
            }
        }
    }

    public function set_404() : void
    {
        if(!$this->_INCLUDE)
        {
            $this->add_route("*", "");
        }
    }
}