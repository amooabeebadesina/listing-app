<?php
/**
 * Created by PhpStorm.
 * User: ABEEB
 * Date: 3/13/2018
 * Time: 3:21 PM
 */

namespace Modules\Models;


use PDO;

class Category extends BaseModel
{

    public $label;

    public function __construct()
    {
        parent::__construct();
    }

    public function businesses()
    {

    }

    public function create($label)
    {
        $query = $this->db->prepare("INSERT INTO categories(label) VALUES(:label)");
        $query->execute(['label' => $label]);
        if ($query->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public function all()
    {
        $query = $this->db->prepare("SELECT * FROM categories ORDER BY created_at DESC");
        $query->execute();
        if ($query->rowCount() > 0) {
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        return null;
    }
}