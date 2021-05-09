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

            <div class="col-md-12">
                <div class="card">
                    <div class="card card-lime card-outline">
                        <div class="card-header bg-dark">
                            <h1 class="card-title text-light"><i class="fas fa-users"></i> รายชื่อผู้ติดต่อ</h1>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive-sm ">

                        <table id="example" class="table table-bordered  table-hover">
                            <thead>
                                <tr class="text-center bg-dark">
                                    <th style="width: 10px;">ลำดับ</th>
                                    <th>ชื่อผู้ติดต่อ</th>
                                    <th>เบอร์โทร</th>
                                    <th style="width: 100px;">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($book_phone as $bp)
                                    <tr id="book_phone{{ $bp->id }}">
                                        <td class="text-center"></td>
                                        <td>{{ $bp->bp_name }}</td>
                                        <td class="text-center">{{ $bp->bp_tel }}</td>
                                        <td>
                                            <div class="row ml-1">
                                                <form method="get" class="delete_form"
                                                    action="{{ url('book_phone/destroy', $bp->id) }}">
                                                    {{ csrf_field() }}

                                                    <a href="#" class="btn btn-primary btn-sm text-white"
                                                        data-toggle="modal" data-target="#profile{{ $bp->id }}">
                                                        <i class="fas fa-address-card"></i></a>

                                                    <a href="#" class="btn btn-warning btn-sm text-white"
                                                        data-toggle="modal" data-target="#editshow{{ $bp->id }}">
                                                        <i class="fas fa-edit"></i></a>

                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger btn-sm" type="submit"
                                                        onclick="return confirm('ต้องการลบข้อมูลใช่ หรือ ไม่')">
                                                        <i class="fas fa-trash"></i></a></button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal แก้ไข -->
                                    <div class="modal fade mt-5" id="editshow{{ $bp->id }}" data-backdrop="static"
                                        data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="card card-warning card-outline">
                                                    <div class="modal-header bg-dark">
                                                        <h3 class="edit-profile" id="staticBackdropLabel">
                                                            แก้ไขผู้ติดต่อ
                                                        </h3>
                                                        <button type="button" class="close text-white" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-12">
                                                        <form action="{{ url('/edit_book', $bp->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            {{ method_field('PATCH') }}
                                                            <div class="form-group">
                                                                <label for="name">ชื่อผู้ติดต่อ</label>
                                                                <input type="text" class="form-control" id="bp_name"
                                                                    name="bp_name" value="{{ $bp->bp_name }}"
                                                                    placeholder="" autocomplete="off">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">เบอร์โทรศัพท์</label>
                                                                <input type="tel" class="form-control" id="bp_tel"
                                                                    name="bp_tel" value="{{ $bp->bp_tel }}"
                                                                    placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="address">ที่อยู่</label>
                                                                <input type="text" class="form-control" id="bp_addr"
                                                                    name="bp_addr" value="{{ $bp->bp_addr }}"
                                                                    placeholder="" autocomplete="off">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">อัพโหลดรูปภาพโปรไฟล์</label>
                                                                <div class="mb-3">
                                                                    <input type="file" name="bp_img" class="" id="bp_img" value="{{$bp->bp_img}}">
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fas fa-save"></i>
                                                        บันทึก</button>
                                                        <input type="hidden" name="_method" value="PATCH">
                                                    </form>
                                                    <button type="reset" class="btn btn-danger" data-dismiss="modal"><i
                                                            class="fas fa-times"></i>
                                                        ยกเลิก</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal โปรไฟล์ -->
                                    <div class="modal fade mt-5" id="profile{{ $bp->id }}" data-backdrop="static"
                                        data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="card card-primary card-outline">
                                                    <div class="modal-header bg-dark">
                                                        <h3 class="edit-profile" id="staticBackdropLabel">
                                                            ข้อมูลผู้ติดต่อ
                                                        </h3>
                                                        <button type="button" class="close text-white" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="col-12">

                                                        <div class="form-group text-center col-12 mb-3">
                                                            <img height="100%" width="100%"
                                                                src="{{ asset('img/' . $bp->bp_img) }}"
                                                                class="img elevation-1" alt="User Image"
                                                                style="height: auto; width: 200px;">
                                                        </div>

                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link text-dark">
                                                                    <b><i class="fas fa-user-tie"></i> ชื่อผู้ติดต่อ</b>
                                                                    <span class="float-right">{{ $bp->bp_name }}</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link text-dark">
                                                                    <b><i class="fas fa-phone-square-alt"></i>
                                                                        เบอร์โทรศัพท์</b>
                                                                    <span class="float-right">{{ $bp->bp_tel }}</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link text-dark">
                                                                    <b><i class="fas fa-map-marked-alt"></i> ที่อยู่</b>
                                                                    <span class="float-right">{{ $bp->bp_addr }}</span>
                                                                </a>
                                                            </li>

                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection

@include('sweetalert::alert')
