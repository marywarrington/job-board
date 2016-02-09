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
    function getContact()
    {
        $this->contact_object;
    }

}

class Contact
{
    private $name;
    private $email;
    private $phone;

    function __construct($contact_name, $contact_email, $contact_phone)
    {
        $this->name = $contact_name;
        $this->email = $contact_email;
        $this->phone = $contact_phone;
    }

    function getName()
    {
        $this->name;
    }
    function getEmail()
    {
        $this->email;
    }
    function getPhone()
    {
        $this->phone;
    }
}
?>
