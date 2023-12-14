<?php

namespace App\Http\Controllers;

use App\DataTables\BuildingsDataTable;

class BuildingsController extends Controller
{
    public function index(BuildingsDataTable $dataTable)
    {
        return $dataTable->render('buildings.index');
    }
}
