@extends('layouts.app')
@section('content')

    <style type="text/css">
        table tr {
            counter-increment: row-num;
        }

        table tr td:first-child::before {
            content: counter(row-num) ". ";
        }

    </style>


    <div class="col mt-3">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>จัดการสมุดโทรศัพท์</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right bg-white">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">จัดการสมุดโทรศัพท์</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 mb-3">

                <a class="btn bg-success card-danger card-outline" data-toggle="modal" data-target="#add">
                    <i class="fas fa-user-plus"></i> เพิ่มรายชื่อผู้ติดต่อ
                </a>

                <!-- /.card-header -->
                <!-- form start -->
                <div class="modal fade mt-5" id="add" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="card card-success card-outline">
                                <div class="modal-header bg-dark">
                                    <h3 class="edit-profile" id="staticBackdropLabel">
                                        <i class="fas fa-user-plus"></i> เพิ่มรายชื่อผู้ติดต่อผู้ติดต่อ
                                    </h3>
                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div class="modal-body">

                                <div class="col-12">
                                    <form action="{{ url('/add_book') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="name">ชื่อผู้ติดต่อ</label>
                                            <input type="text" class="form-control" id="bp_name" name="bp_name" value=""
                                                placeholder="" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">เบอร์โทรศัพท์</label>
                                            <input type="tel" class="form-control" id="bp_tel" name="bp_tel" value=""
                                                placeholder="" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">ที่อยู่</label>
                                            <input type="text" class="form-control" id="bp_addr" name="bp_addr" value=""
                                                placeholder="" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">อัพโหลดรูปภาพโปรไฟล์</label>
                                            <div class="mb-3">
                                                <input class="form form-control-sm" name="bp_img" id="bp_img" value=""
                                                    type="file" autocomplete="off" required="">

                                            </div>

                                        </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save"></i>
                                    บันทึก</button>

                                </form>
                                <button type="reset" class="btn btn-danger" data-dismiss="modal"><i
                                        class="fas fa-times"></i>
                                    ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
