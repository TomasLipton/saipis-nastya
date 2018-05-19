<?php

namespace App\Controllers;

use App\Controller;

class Index
    extends Controller
{
    protected function actionDefault()
    {
        require __DIR__ . '/../template/home.php';
    }
}