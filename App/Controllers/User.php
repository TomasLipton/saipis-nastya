<?php

namespace App\Controllers;


use App\Controller;
use \App\Models\User as UserModel;

class User
    extends Controller
{
    public static function showLoginForm()
    {
        require __DIR__ . '/../template/login.php';
    }

    public function actionAuth()
    {
        $user = UserModel::findByColumn('username', trim($_POST['userLogin']))[0];
        if ($user != false && $user->password == md5(trim($_POST['userPassword']))){
            $_SESSION['user']['isIn'] = true;
            $_SESSION['user']['id'] = $user->id;
            header('Location: /');
        }else{
            $errors['login'] = true;
            $userLogin = trim($_POST['userLogin']);
            require __DIR__ . '/../template/login.php';
        }
    }

    public function actionLogout()
    {
        $_SESSION['user'] = [];
//        unset($_SESSION);
        header('Location: /');
    }
}