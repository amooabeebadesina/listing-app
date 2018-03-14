<?php

namespace Modules\Controllers;

use Modules\Models\Business;

/**
 * Created by PhpStorm.
 * User: ABEEB
 * Date: 3/12/2018
 * Time: 3:58 PM
 */
class BusinessController extends BaseController
{

    public function all()
    {
        $business = new Business();
        $businesses = $business->all();
        return $businesses;
    }

}