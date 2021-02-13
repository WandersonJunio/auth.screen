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