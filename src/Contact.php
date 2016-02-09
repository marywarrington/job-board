<?php
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
        return $this->name;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getPhone()
    {
        return $this->phone;
    }
}
?>
