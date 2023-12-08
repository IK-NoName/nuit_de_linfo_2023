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
        ],
        [
            "name" => "login",
            "file" => "public/pages/guest/login.php"
        ],
        [
            "name" => "signin",
            "file" => "public/pages/guest/signin.php"
        ],
        [
            "name" => "index",
            "file" => "public/pages/public/index.php",
            "permission" => new Permission("public")
        ],
        [
            "name" => "cauchemard",
            "file" => "public/pages/public/cauchemard.php",
            "permission" => new Permission("public")
        ]
    ];
