<?php

namespace App\Controllers;


use App\Controller;
use \App\Models\Calculating as CalculatingModel;

class Calculating
    extends Controller
{
    public function actionAll()
    {
        $calculatings = CalculatingModel::findAll();
        require __DIR__ . '/../template/calculating/all.php';
    }

    public function actionOne()
    {
        $id = trim($_GET['id']);
        $calculation = CalculatingModel::findById($id);
        require __DIR__ . '/../template/calculating/one.php';
    }

    public function actionSave()
    {
        $calculating = new CalculatingModel();
        $calculating->owner_id = $this->user->id;
        $calculating->company_name = $_POST['companyName'];
        $calculating->data = $_POST['data'];
        $calculating->insert();
    }
}