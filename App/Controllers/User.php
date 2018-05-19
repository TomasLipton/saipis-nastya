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
        if ($user != false && $user->password == md5(trim($_POST['userPasswords']))){
            $_SESSION['user']['isIn'] = true;
            header('Location: /');
        }else{
            $errors['login'] = true;
            $userLogin = trim($_POST['userLogin']);
            require __DIR__ . '/../template/login.php';
        }
    }
}