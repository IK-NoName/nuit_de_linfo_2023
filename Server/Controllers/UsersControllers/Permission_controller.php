<?php

class Permission
{
    private int $_ID;
    private string $_NAME;

    private static array $_PERMISSION_ARRAY = [
        "guest" => 0,
        "public" => 1,
        "private" => 2
    ];

    public function __construct(string $name, int $id = null)
    {
        $this->_NAME = $name;
        if($id === null) {
            if (isset(Permission::$_PERMISSION_ARRAY[$name])) {
                $this->_ID = Permission::$_PERMISSION_ARRAY[$name];
            }
            else
            {
                $this->_NAME = "guest";
                $this->_ID = 0;
            }
        }
        else
        {
            $this->_ID = $id;
        }

    }

    public function get_name() : string
    {
        return $this->_NAME;
    }

    public function get_id() : int
    {
        return $this->_ID;
    }

    public function is_authorized(Permission $other_permission) : bool
    {
        return $this->_ID >= $other_permission->get_id();
    }

}