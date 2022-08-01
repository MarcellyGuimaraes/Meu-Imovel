<?php

namespace App\Api;

class ApiMessages
{
    private $message = [];

    public function __construct($message, $data = [])
    {
        $this->message['message'] = $message;
        $this->message['errors'] = $data;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
