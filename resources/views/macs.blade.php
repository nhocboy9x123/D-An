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
                Thông tin Macs
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>uid</th>
                                <th>customerld</th>
                                <th>mac</th>
                                <th>fullname</th>
                                <th>mobile</th>
                                <th>email</th>
                                <th>address</th>
                                <th>purchaseDate</th>
                                <th>sellDate</th>
                                <th>notes</th>
                                <th>sellMan</th>
                                <th>status</th>
                                <th>name</th>
                                <th>installationMan</th>
                                <th>warrantyDate</th>
                                <th>provider</th>
                                <th>updateDate</th>
                                <th>lockName</th>
                                <th>lockAlias</th>
                                <th>lockData</th>
                                <th>lockld</th>
                                <th>buyerName</th>
                                <th>buyerEmail</th>
                                <th>buyerPhone</th>
                                <th>buyerAddress</th>
                        </thead>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
@endsection