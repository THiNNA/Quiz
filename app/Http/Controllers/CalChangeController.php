<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cal_change');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->c_money);

        $cal_change = $request->c_money - $request->c_price;
            if($cal_change>=500){
                $sum1=$cal_change/500;
                $sum1s=floor($sum1)*500;
                $cal_change=$cal_change-$sum1s;
                echo "ธนบัตร 500 = ".floor($sum1)." ใบ"."<br>";
            }
            if($cal_change>=100){
                $sum2=$cal_change/100;
                $sum2s=floor($sum2)*100;
                $cal_change=$cal_change-$sum2s;
                echo "ธนบัตร 100 = ".floor($sum2)." ใบ"."<br>";
            }
             if($cal_change>=50){
                $sum3=$cal_change/50;
                $sum3s=floor($sum3)*50;
                $cal_change=$cal_change-$sum3s;
                echo "ธนบัตร 50 = ".floor($sum3)." ใบ"."<br>";
            }
             if($cal_change>=10){
                $sum4=$cal_change/10;
                $sum4s=floor($sum4)*10;
                $cal_change=$cal_change-$sum4s;
                echo "เหรียญ 10 บาท = ".floor($sum4)." เหรียญ"."<br>";
            }
             if($cal_change>=5){
                $sum5=$cal_change/5;
                $sum5s=floor($sum5)*5;
                $cal_change=$cal_change-$sum5s;
                echo "เหรียญ 5 บาท = ".floor($sum5)." เหรียญ"."<br>";
            }
            if($cal_change>=1){
                $sum6=$cal_change/1;
                $sum6s=floor($sum6)*1;
                $cal_change=$cal_change-$sum6s;
                echo "เหรียญ 1 บาท = ".floor($sum6)." เหรียญ"."<br>";
            }

            // dd($sum1);
            return view('cal_price');


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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
