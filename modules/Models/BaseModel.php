<?php

namespace Modules\Models;

use Modules\Core\Database;

/**
 * Created by PhpStorm.
 * User: ABEEB
 * Date: 3/12/2018
 * Time: 9:55 PM
 */
class BaseModel
{

    protected $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }
}