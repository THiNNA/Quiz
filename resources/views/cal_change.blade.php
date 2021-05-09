@extends('layouts.app')
@section('content')

    <div class="col mt-3">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>โปรแกรมคิดเงินทอน</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right bg-white">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">โปรแกรมคิดเงินทอน</li>
                </ol>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card card-danger card-outline">
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-12">
                            <form action="{{url('cal_price')}}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">เงินที่รับมา</label>
                                            <input type="number" class="form-control" id="c_money" name="c_money" value=""
                                                placeholder="" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">ราคาสินค้า</label>
                                            <input type="number" class="form-control" id="c_price" name="c_price" value=""
                                                placeholder="" required="">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success" style="float: right;">
                                    <i class="fas fa-calculator"></i>
                                    คำนวณ</button>

                                <hr class="mt-5">


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
