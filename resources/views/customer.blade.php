@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Quản lý <small>khánh hàng</small>
        </h1>
    </div>
</div>
<!-- /. ROW  -->

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Thông tin khách hàng
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>code </th>
                                <th>fullname</th>
                                <th>email</th>
                                <th>password</th>
                                <th>username</th>
                                <th>neolock_username</th>
                                <th>phone</th>
                                <th>country</address></th>
                                <th>district</th>
                                <th>city</th>
                                <th>status</th>
                                <th>created_date</th>
                                <th>avatar</th>
                                <th>token</th>
                                <th>point</th>
                                <th>webcloud_enable</th>
                                <th>security_key</th>
                                <th>fcm</th>
                                <th>social_id</th>
                                <th>last_login</th>
                                <th>access_token</th>
                                <th>refresh_token</th>
                                <th>open_id</th>
                                <th>scope</th>
                                <th>expires_in</th>
                                <th>identification_number</th>
                                <th>indentification_imag_1</th>
                                <th>indentification_imag_2</th>
                                <th>balance</th>
                                <th>receiveFcm</th>
                                <th>roles</th>
                                <th>emailVerify</th>
                                <th>mobileVerify</th>
                                <th>remark</th>
                                <th>is_deleted</th>
                                <th>commission</th>
                                <th>parent</th>
                                <th>CCCD</th>
                                <th>product_type</th>
                                <th>is_receive_email</th>
                        </thead>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
@endsection

