<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $title = 'List Category';
        return view('categories.index',[
            'title' => $title
        ]);
    }
    public function addNewCategory() {
        $title = 'Add New Category';
        return view('categories.add',[
           'title' => $title
        ]);

    }
    public function editCategory($id) {

    }
    public function deleteCategory($id) {

    }

}
