<?php

class User
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

class UserRepository
{
    // Responsibility 1: User Data Management
    public function save()
    {
        // Code to save user data to a database
        echo "Saving user data to database\n";
    }
}

class EmailService
{
    // Responsibility 2: Email Notification
    public function sendEmail($email, $message)
    {
        // Code to send an email
        echo "Sending an email " . $email . " to " . $message . "\n";
    }
}

// Usage
$user = new User("John", "email@address");
$userRepository = new UserRepository();
$userRepository->save();

$emailService = new EmailService();
$emailService->sendEmail($user->getEmail(), "Hello World!");