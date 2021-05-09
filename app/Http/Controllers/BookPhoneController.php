<?php

namespace App\Http\Controllers;

use App\Models\Book_phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BookPhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $book_phone = Book_phone::orderBy('id', 'DESC')
            ->get();

        return view('manage_book', compact('book_phone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->file('bp_img') != '') {

            $file = $request->file('bp_img');
            $ext = $file->getClientOriginalExtension();

            $name = md5(rand() * time()) . '.' . $ext;
            $file->move(public_path('/img'), $name);
        } else {
            $name = '';
        }

        $book_phone = new Book_phone([
            'bp_name' => $request->bp_name,
            'bp_tel' => $request->bp_tel,
            'bp_addr' => $request->bp_addr,
            'bp_img' =>  $name
        ]);

        $book_phone->save();

        return back()->with('success', 'เพิ่มข้อมูลผู้ใชงานสำเร็จ!');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('bp_img') != '') {   //i_imgคือชื่อinput

            $file = $request->file('bp_img');   //i_imgคือชื่อinput
            $ext = $file->getClientOriginalExtension();

            $name = md5(rand() * time()) . '.' . $ext;
            $file->move(public_path('/img'), $name);   //img/infoคือชื่อที่เก็บ
        } else {
            $name = '';
        }

        $book_phone = Book_phone::find($id);
        $book_phone->bp_name = $request->get('bp_name');
        $book_phone->bp_tel = $request->get('bp_tel');
        $book_phone->bp_addr = $request->get('bp_addr');
        $book_phone->bp_img = $name;

        $book_phone->save();

        return back()->with('success', 'แก้ไขข้อมูลสำเร็จ!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book_phone = Book_phone::find($id);
        $book_phone->delete();
        return back()->with('success', 'ลบข้อมูลสำเร็จ!');
    }
}
