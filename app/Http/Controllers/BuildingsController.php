<?php

namespace App\Http\Controllers;

use App\DataTables\BuildingsDataTable;

class BuildingsController extends Controller
{
    public function index(BuildingsDataTable $dataTable)
    {
        return $dataTable->render('buildings.index');
    }
    public function show(BuildingsDataTable $dataTable)
    {
        $buildings = BuildingsController::select('id','name','hotelId','code');
        return $dataTable::of($buildings)
            ->addcolum('action', function ($buildings) {
                return '<a href="#" class="btn btn-xs btn-primary edit" id="'.$buildings->id.'"><i class="glyphicon glyphicon-edit"></i>Edit</a>';
            })
        ->make(true);
    } 
}
