<?php
class Job
{
    private $title;
    private $salary;
    private $description;
    private $location;
    private $contact_object;

    function __construct($job_title, $job_salary, $job_description, $job_location, $job_contact_object)
    {
        $this->title = $job_title;
        $this->salary = $job_salary;
        $this->description = $job_description;
        $this->location = $job_location;
        $this->contact_object = $job_contact_object;
    }
    // function __construct($job_title, $job_salary, $job_description, $job_location, $job_contact)
    // {
    //     $this->title = $job_title;
    //     $this->salary = $job_salary;
    //     $this->description = $job_description;
    //     $this->location = $job_location;
    //     $this->contact = $job_contact;
    // }

    function getTitle()
    {
        return $this->title;
    }
    function getSalary()
    {
        return $this->salary;
    }
    function getDescription()
    {
        return $this->description;
    }
    function getLocation()
    {
        return $this->location;
    }
    function getContact()
    {
        return $this->contact_object;
    }

}
?>
