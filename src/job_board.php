<?php
class Job
{
    private $title;
    private $salary;
    private $description;
    private $location;
    private $phone;

    function __construct($job_title, $job_salary, $job_description, $job_location, $job_phone)
    {
        $this->title = $job_title;
        $this->salary = $job_salary;
        $this->description = $job_description;
        $this->location = $job_location;
        $this->phone = $job_phone;
    }

    function getTitle()
    {
        $this->title;
    }
    function getSalary()
    {
        $this->salary;
    }
    function getDescription()
    {
        $this->description;
    }
    function getLocation()
    {
        $this->location;
    }
    function getPhone()
    {
        $this->phone;
    }

}
?>
