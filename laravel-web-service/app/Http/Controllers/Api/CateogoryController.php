<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CateogoryController extends Controller
{
    public function index(Category $category)
    {

        //$categories = $category->all();

        $categories = $category->get();

        //return $categories;

        return response()->json($categories);

    }
}
