<?php

namespace App;



use App\Models\User;
use App\Controllers\User as UserController;

abstract class Controller
{

    protected $settings;

    public function __construct()
    {
        $this->settings = require_once __DIR__ . '/settings.php';
    }

    public function action($name)
    {
        if (User::isIn() || 'Auth' == $name) {
            $name = 'action' . $name;
            $this->$name();
        } else {
            UserController::showLoginForm();
        }
    }

}