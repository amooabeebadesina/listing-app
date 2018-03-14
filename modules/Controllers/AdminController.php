<?php

namespace Modules\Controllers;

use Modules\Core\Session;
use Modules\Models\Admin;

class AdminController extends BaseController
{

    public function actionLogin($data)
    {
        $data['email'] = $this->sanitizeInput($data['email']);
        $data['password'] = $this->sanitizeInput($data['password']);
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return ['error' => 'Invalid email format'];
        } else {
            $admin = new Admin();
            $response = $admin->authenticate($data);
            return $response;
        }
    }

    public function isLogin()
    {
        return Admin::isLogin();
    }

    public static function logout()
    {
        if (Session::exists('admin_id')) {
            Session::delete('admin_id');
            Session::destroy();
        }
    }
}