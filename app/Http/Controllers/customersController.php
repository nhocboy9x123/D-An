<?php

namespace App\Http\Controllers;

use App\DataTables\customersDataTable;

class customersController extends Controller
{
    public function index(customersDataTable $dataTable)
    {
        return $dataTable->render('customers.index');
    }
}