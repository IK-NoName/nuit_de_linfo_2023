<?php

    $routes = [
        [
            "name" => "home",
            "file" => "public/pages/public/home.php",
            "permission" => new Permission("public"),
            "params" => []
        ],
        [
            "name" => "home/test",
            "file" => "public/pages/public/test.php",
            "permission" => new Permission("public"),
            "params" => [
                "test"
            ]
        ]
    ];
