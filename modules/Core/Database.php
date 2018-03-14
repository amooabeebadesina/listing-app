<?php
/**
 * Created by PhpStorm.
 * User: ABEEB
 * Date: 3/12/2018
 * Time: 12:28 PM
 */

namespace Modules\Core;

use PDO;
use PDOException;

class Database
{
    private static $_instance = null;
    private $dbc = null;
    public function getConnection()
    {
        $config = include('../../config/database.php');
        try {
            $this->dbc = new PDO('mysql:host=' . $config['mysql']['host'] . ';dbname=' . $config['mysql']['dbname'],
                                    $config['mysql']['username'],$config['mysql']['password']) ;
            $this->dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo "Database connection error!!";
        }
        return $this->dbc;
    }
    public static function getInstance()
    {
        if(!isset(self::$_instance))
        {
            self::$_instance = self::$dbc;
        }
        return self::$_instance;
    }
}