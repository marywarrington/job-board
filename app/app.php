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
                          <input id='job_title' name='job_title' class='form-control' type='text'>
                        </div>
                        <div class='form-group'>
                          <label for='job_salary'>Job Salary:</label>
                          <input id='job_salary' name='job_salary' class='form-control' type='number'>
                        </div>
                        <div class='form-group'>
                          <label for='job_description'>Job Description:</label>
                          <input id='job_description' name='job_description' class='form-control' type='text'>
                        </div>
                        <div class='form-group'>
                          <label for='job_location'>Job Location:</label>
                          <input id='job_location' name='job_location' class='form-control' type='text'>
                        </div>
                        <div class='form-group'>
                          <label for='job_phone'>Contact Phone Number:</label>
                          <input id='job_phone' name='job_phone' class='form-control' type='text'>
                        </div>
                        <button type='submit' class='btn-success'>Create</button>
                    </form>
                </div>
            </body>
        </html>
        ";
    });

    $app->get("/job_postings", function() {
        $my_job = new Job($_GET["job_title"], $_GET["job_salary"], $_GET["job_description"], $_GET["job_location"], $_GET["job_phone"]);

        $output = "<div class='row'>
                <div class='col-md-6'>
                    <h2>" . $_GET["job_title"] . "</h2>
                </div>
                <div class='col-md-6'>
                    <p>$" . $_GET["job_salary"] . "</p>
                    <p>" . $_GET["job_description"] . "</p>
                    <p>" . $_GET["job_location"] . "</p>
                    <p>" . $_GET["job_phone"] . "</p>
                </div>
            </div>
        ";
         return $output;

    });

    return $app;
?>
