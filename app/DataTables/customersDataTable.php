<?php

namespace App\DataTables;

use App\Models\customer;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class customersDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'customers.action')
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(customer $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('customers-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('code'),
            Column::make('fullname'),
            Column::make('email'),
            Column::make('password'),
            Column::make('username'),
            Column::make('neolock_username'),
            Column::make('phone'),
            Column::make('address'),
            Column::make('country'),
            Column::make('district'),
            Column::make('city'),
            Column::make('status'),
            Column::make('create_date'),
            Column::make('avatar'),
            Column::make('token'),
            Column::make('point'),
            Column::make('webcloud_enable'),
            Column::make('security_key'),
            Column::make('fcm'),
            Column::make('social_id'),
            Column::make('last_login'),
            Column::make('accsess_token'),
            Column::make('refresh_token'),
            Column::make('open_id'),
            Column::make('scope'),
            Column::make('expires_in'),
            Column::make('indentification_number'),
            Column::make('indentification_img_1'),
            Column::make('indentification_img_2'),
            Column::make('balance'),
            Column::make('receiveFcm'),
            Column::make('roles'),
            Column::make('emailVerify'),
            Column::make('mobileVerify'),
            Column::make('remark'),
            Column::make('is_deleted'),
            Column::make('commission'),
            Column::make('parent'),
            Column::make('CCCD'),
            Column::make('product_type'),
            Column::make('is_receive_email'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'customers_' . date('YmdHis');
    }
}
