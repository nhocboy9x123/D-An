<?php

namespace App\Http\Controllers;

use App\DataTables\CustomersDataTable;

class CustomersController extends Controller
{
    public function index(customersDataTable $dataTable)
    {
        return $dataTable->render('customers.index');
    }
}