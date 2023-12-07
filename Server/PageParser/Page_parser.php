<?php
    $params = [];

    function php_params_config(array $parameters): void
    {
        global $params;
        if(isset($parameters))
        {
            $params = $parameters;
        }
    }
    function param(string $param_name): void
    {
        global $params;
        if(isset($params[$param_name]))
        {
            echo $params[$param_name];
        }
        else
        {
            echo "undefined";
        }
    }

    function js_params_config(): void
    {
        global $params;
        echo "<script php_genered>\n";
        foreach (array_keys($params) as $param)
        {
            echo "var " . $param . " = \"" . $params[$param] . "\";\n";
        }
        echo "</script>";
    }