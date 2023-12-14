<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\BlogsDataTable;

class BlogsController extends Controller
{
    //
    public function index(BlogsDataTable $dataTable)
    {
        return $dataTable->render("blogs.index");
    }
}
