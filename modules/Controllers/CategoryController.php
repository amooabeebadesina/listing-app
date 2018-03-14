<?php
/**
 * Created by PhpStorm.
 * User: ABEEB
 * Date: 3/14/2018
 * Time: 6:38 AM
 */

namespace Modules\Controllers;


use Modules\Models\Category;

class CategoryController extends BaseController
{

    public function allCategories()
    {
        $category = new Category();
        $categories = $category->all();
        return $categories;
    }

    public function createCategory($label)
    {
        $category = new Category();
        return $category->create($label);
    }
}