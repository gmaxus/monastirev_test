<?php

namespace App\Http\Controllers;

use App\Tree;
use Illuminate\Http\Request;
use Faker\Factory;


class Employees extends Controller
{
    public function tree()
    {
        $tree = Tree::get()->toTree();

        return $tree;
    }
}
