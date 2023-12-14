@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Quản lý <small>Tòa nhà</small>
        </h1>
    </div>
</div>
<!-- /. ROW  -->

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Thông tin cơ quan
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>created_date</th>
                                <th>status</th>
                                <th>code</th>
                                <th>MST</th>
                                <th>email</th>
                                <th>refer</th>
                                <th>description</th>
                                <th>Policies</th>
                                <th>type</th>
                                <th>cip</th>
                                <th>level</th>
                                <th>commmission</th>
                                <th>max_discount</th>
                                <th>cccd</th>
                                <th>company_name</th>
                                <th>address</th>
                        </thead>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
@endsection