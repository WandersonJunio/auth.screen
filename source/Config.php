<?php

define("SITE",
            [
                "name" => "Auth on MVC with PHP",
                "desc" => "Making integration with Facebook login and Google login",
                "domain" => "localauth.com",
                "locale" => "pt_BR",
                "root" => "http://localhost/ws-opencode/opencode/"

            ]
);

if($_SERVER["SERVER_NAME"] == "localhost")
{
    require __DIR__."/Minify.php";
}

define("DATA_LAYER_CONFIG",
    [
        "driver" => "mysql",
        "host" => "localhost",
        "port" => "3306",
        "dbname" => "auth",
        "username" => "root",
        "passwd" => "",
        "options" => [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_CASE => PDO::CASE_NATURAL
            ]
    ]
);

define(
    "SOCIAL",
    [
        "facebook_page" => "ariele.brites",
        "facebook_author" => "arielebrites",
        "facebook_appid" => "",
        "twitter_creator" => "@Wanders74960970",
        "twitter_site" => "@Wanders74960970"
    ]
    );
