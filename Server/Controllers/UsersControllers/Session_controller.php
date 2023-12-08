<?php

    /**
     * @class This class allow you to control the session for a lambda user
     */
    class Session_controller
    {
        public function __construct()
        {
            session_start();
        }

        public function get_id() : int
        {
            return $_SESSION["ID"];
        }

        public function get_pseudo() : string
        {
            return $_SESSION["PSEUDO"];
        }

        public function get_mail() : string
        {
            return $_SESSION["MAIL"];
        }

        public function get_permission() : Permission
        {
                if(isset($_SESSION["PERMISSION"]))
            {
                return $_SESSION["PERMISSION"];
            }
            else
            {
                return new Permission("guest");
            }
        }

        public function is_authenticate() : bool
        {
            return $_SESSION["STATE"];
        }

        public function authentifie(int $id = 0,
                                    string $pseudo = "guest",
                                    string $mail = "guest",
                                    Permission $permission = new Permission(0, "guest")) : void
        {
            $_SESSION["ID"] = $id;
            $_SESSION["PSEUDO"] = $pseudo;
            $_SESSION["MAIL"] = $mail;
            $_SESSION["PERMISSION"] = $permission;
            $id = 0 ? $_SESSION["STATE"] = false : $_SESSION["STATE"] = true;
        }

        public function disconnect()
        {
            session_destroy();
        }

    }