<?php

namespace Modules\Controllers;
use Modules\Core\Redirect;
use Modules\Core\Session;

/**
 * Created by PhpStorm.
 * User: ABEEB
 * Date: 3/12/2018
 * Time: 3:55 PM
 */
class BaseController
{

    public function __construct()
    {

    }

    public function sanitizeInput($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        $input = filter_var($input, FILTER_SANITIZE_STRING);
        return $input;
    }

}