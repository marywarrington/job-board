<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/job_board.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "Hi there!";
    });

    return $app;
?>
