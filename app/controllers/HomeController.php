<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\UserModel;

class HomeController extends Controller {
    public function index() {
        $model = new UserModel();
        $users = $model->getAll();
        $this->render('home', ['users' => $users]);
    }
}
