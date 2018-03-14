<?php

namespace Modules\Models;

use Modules\Models\BaseModel;

/**
 * Created by PhpStorm.
 * User: ABEEB
 * Date: 3/12/2018
 * Time: 9:51 PM
 */
class Business extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
    }

    public function all()
    {
        $query = $this->db->prepare(
                "SELECT * FROM businesses ORDER BY created_at DESC"
                );
        $query->execute();

        if ($query->rowCount() > 0) {
            return 'boy';
        } else {
            return null;
        }
    }

}