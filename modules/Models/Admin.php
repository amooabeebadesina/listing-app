<?php

namespace Modules\Models;

use Modules\Core\Session;
use Modules\Models\BaseModel;
use PDO;

/**
 * Created by PhpStorm.
 * User: ABEEB
 * Date: 3/12/2018
 * Time: 9:52 PM
 */
class Admin extends BaseModel
{

    public $errors = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }

    public function authenticate($data)
    {
        $query = $this->db->prepare("
            SELECT * FROM users WHERE email = :email
            AND password = :password");
        $query->execute(['email' => $data['email'], 'password' => sha1($data['password'])]);
        if ($query->rowCount() > 0) {
            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                Session::put('admin_id', $row->id);
            }
            return ['success' => 'Login successful'];
        } else {
            return ['error' => 'Wrong email and password combination'];
        }
    }

    public static function isLogin()
    {
        return Session::exists('admin_id');
    }

    public function addNewBusiness()
    {

    }

    public function updateBusiness($id, $data)
    {

    }

}