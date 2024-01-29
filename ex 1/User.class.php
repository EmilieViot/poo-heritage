<?php

class User 
{
    protected string $email;
    protected string $password;

    public function __construct(){
    }

    public function login() : array {
    	return ["email" => $this->email, "password" => $this->password];
    }
}