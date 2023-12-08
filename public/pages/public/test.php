<?php
    require "Server/PageParser/Page_parser.php";
    if(isset($parameters)) {php_params_config($parameters); js_params_config();}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Var en js
    <p id="test"></p>
    <script src="../public/scripts/test.js" type="module"></script>
    <br>
    Var en php lol
    <br>
    <br>
    <?php param("test");
        echo $session_controller->get_pseudo();
    ?>
</body>
</html>
