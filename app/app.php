<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/job_board.php";

    $app = new Silex\Application();

    $app->get("/job_form", function() {
        return "
        <!DOCTYPE html>
        <html>
            <head>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
                <title>Post a Job!</title>
            </head>
            <body>
                <div class='container'>
                    <h1>Post a Job!</h1>
                    <form action='/job_postings'>
                        <div class='form-group'>
                          <label for='job_title'>Job Title:</label>
                          <input id='job_title' name='job_title' class='form-control' type='number'>
                        </div>
                        <div class='form-group'>
                          <label for='job_salary'>Job Salary:</label>
                          <input id='job_salary' name='job_salary' class='form-control' type='number'>
                        </div>
                        <div class='form-group'>
                          <label for='job_description'>Job Description:</label>
                          <input id='job_description' name='job_description' class='form-control' type='number'>
                        </div>
                        <div class='form-group'>
                          <label for='job_location'>Job Location:</label>
                          <input id='job_location' name='job_location' class='form-control' type='number'>
                        </div>
                        <div class='form-group'>
                          <label for='job_phone'>Contact Phone Number:</label>
                          <input id='job_phone' name='job_phone' class='form-control' type='number'>
                        </div>
                        <button type='submit' class='btn-success'>Create</button>
                    </form>
                </div>
            </body>
        </html>
        ";
    });

    $app->get("/", function() {
        return "Hi there!";
    });

    return $app;
?>
