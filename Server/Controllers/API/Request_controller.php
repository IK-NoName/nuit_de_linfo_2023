<?php
class Request_controller
{
    private array $_REQUEST;
    private Session_controller $_SESSION_CONTROLLER;
    private string $_SCRIPTS_PATH;
    private mysqli $_DB;

    public function __construct(array $request, mysqli $db, Session_controller $session_controller, string $scripts_path)
    {
        $this->_REQUEST = $request;
        $this->_SESSION_CONTROLLER = $session_controller;
        $this->_SCRIPTS_PATH = $scripts_path;
        $this->_DB = $db;
    }

    private function search_script() : ?string
    {
        $script = null;
        if (isset($this->_REQUEST["request"])) {
            $dir = scandir($this->_SCRIPTS_PATH);
            foreach ($dir as $file) {
                if ($file != "." && $file != "..") {
                    if ($file === $this->_REQUEST["request"] . ".php") {
                        $script = $this->_SCRIPTS_PATH . "/" . $file;
                    }
                }
            }

        }
        return $script;
    }

    private function execute_script(string $script_path) : mixed
    {

        if(file_exists($script_path))
        {
            include $script_path;
            if(isset($permission) && isset($require))
            {
                if($this->_SESSION_CONTROLLER->get_permission()->is_authorized($permission))
                {
                    $require_ok = true;
                    $final_params = [];
                    $others = [];
                    $i = 0;
                    while($require_ok && $i < count($require))
                    {
                        if(isset($this->_REQUEST[$require[$i]]))
                        {
                            $final_params[$require[$i]] = $this->_REQUEST[$require[$i]];
                        }
                        else
                        {
                            $require_ok = false;
                        }
                        $i ++;
                    }
                    if($require_ok)
                    {
                        return run($final_params, $this->_DB, $this->_SESSION_CONTROLLER, $others);
                    }
                }
            }
        }
        return NULL;
    }

    public function handle_request() : void
    {
        $potential_script = $this->search_script();
        if ($potential_script != null) {
            $result = $this->execute_script($potential_script);
            echo json_encode($result);
        }
        else
        {
            echo "Error script not found";
        }
    }

}