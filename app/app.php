<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Job.php";
    require_once __DIR__."/../src/Contact.php";

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
                          <label for='contact_name'>Your Full Name:</label>
                          <input id='contact_name' name='contact_name' class='form-control' type='text'>
                        </div>
                        <div class='form-group'>
                          <label for='contact_email'>Your Email:</label>
                          <input id='contact_email' name='contact_email' class='form-control' type='text'>
                        </div>
                        <div class='form-group'>
                          <label for='contact_phone'>Your Phone Number:</label>
                          <input id='contact_phone' name='contact_phone' class='form-control' type='text'>
                        </div>
                        <button type='submit' class='btn-success'>Create</button>
                    </form>
                </div>
            </body>
        </html>
        ";
    });

    $app->get("/job_postings", function() {
        $new_contact = new Contact($_GET["contact_name"], $_GET["contact_email"], $_GET["contact_phone"]);
        $my_job = new Job($_GET["job_title"], $_GET["job_salary"], $_GET["job_description"], $_GET["job_location"], $new_contact);

        $output = "<div class='row'>
                <div class='col-md-6'>
                    <h2>" . $my_job->getTitle() . "</h2>
                </div>
                <div class='col-md-6'>
                    <p>$" . $my_job->getSalary() . "</p>
                    <p>" . $my_job->getDescription() . "</p>
                    <p>" . $my_job->getLocation() . "</p>
                    <p>" . $new_contact->getName() . "</p>
                    <p>" . $new_contact->getEmail() . "</p>
                    <p>" . $new_contact->getPhone() . "</p>
                </div>
            </div>
        ";
         return $output;

    });

    return $app;
?>
