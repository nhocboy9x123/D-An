@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Quản lý <small>loại sản phẩm</small>
        </h1>
    </div>
</div>
<!-- /. ROW  -->

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Loại sản phẩm
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>customer_id</th>
                                <th>title</th>
                                <th>image</th>
                                <th>decription</th>
                                <th>created_date</th>
                                <th>modified</th>
                                <th>status</th>
                                <th>color_tag</th>
                                <th>locklist</th>
                        </thead>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
@endsection