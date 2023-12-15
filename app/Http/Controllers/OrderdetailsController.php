<?php

namespace App\Http\Controllers;

use App\DataTables\OrderdetailsDataTable;

class OrderdetailsController extends Controller
{
    public function index(OrderdetailsDataTable $dataTable)
    {
        return $dataTable->render('orderdetails.index');
    }
}
