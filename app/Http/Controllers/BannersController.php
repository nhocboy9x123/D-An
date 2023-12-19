<?php

namespace App\Http\Controllers;

use App\DataTables\BannersDataTable;

class BannersController extends Controller
{
    public function index(BannersDataTable $dataTable)
    {
        return $dataTable->render('banners.index');
    }
}
