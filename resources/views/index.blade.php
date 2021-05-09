@extends('layouts.app')
@section('content')


<form action="process.php" method="post">
    <table width="500" border="0" align="center">
    <tr>
          <td colspan="2">
          <div align="center"><h2>โปรแกรมคำนวนเงินทอนว่าต้องมีธนบัตรกี่ใบและ เหรียญกี่เหรียญ</h2></div></td>
      </tr>
        <tr>
          <td width="200"><div align="right">จำนวนเงินทอน : </div></td>
          <td width="212"><input type="text" name="money" size="20" maxlength="100" /></td>
        </tr>
        <tr>
          <td colspan="2"> <div align="center"><input type="submit" value="คำนวณ" /></div></td>
        </tr>
        <tr>
          <td colspan="2" style="font-size:14px; color:#F00;" align="center"></td>
        </tr>
      </table>
    <div align="center"></div>

    <div align="center">

        <h2>โปรแกรมคำนวนเงินทอนว่าต้องมีธนบัตรกี่ใบและเหรียญกี่เหรียญ</h2>

       <?php


     $money=50;
       if($money>=1000){
           $sum1=$money/1000;
           $sum1s=floor($sum1)*1000;
           $money=$money-$sum1s;
           echo "มีจำนวนธนบัตร 1,000 = ".floor($sum1)." ใบ"."<br>";
       }if($money>=500){
           $sum2=$money/500;
           $sum2s=floor($sum2)*500;
           $money=$money-$sum2s;
           echo "มีจำนวนธนบัตร 500 = ".floor($sum2)." ใบ"."<br>";
       }if($money>=100){
           $sum3=$money/100;
           $sum3s=floor($sum3)*100;
           $money=$money-$sum3s;
           echo "มีจำนวนธนบัตร 100 = ".floor($sum3)." ใบ"."<br>";
       }if($money>=50){
           $sum4=$money/50;
           $sum4s=floor($sum4)*50;
           $money=$money-$sum4s;
           echo "มีจำนวนธนบัตร 50 = ".floor($sum4)." ใบ"."<br>";
       }if($money>=20){
           $sum5=$money/20;
           $sum5s=floor($sum5)*20;
           $money=$money-$sum5s;
           echo "มีจำนวนธนบัตร 20 = ".floor($sum5)." ใบ"."<br>";
       }if($money>=10){
           $sum51=$money/10;
           $sum51s=floor($sum51)*10;
           $money=$money-$sum51s;
           echo "มีจำนวนเหรียญ 10 = ".floor($sum51)." เหรียญ"."<br>";
       }if($money>=5){
           $sum6=$money/5;
           $sum6s=floor($sum6)*5;
           $money=$money-$sum6s;
           echo "มีจำนวนเหรียญ 5 = ".floor($sum6)." เหรียญ"."<br>";
       }if($money>=2){
           $sum7=$money/2;
           $sum7s=floor($sum7)*2;
           $money=$money-$sum7s;
           echo "มีจำนวนเหรียญ 2 = ".floor($sum7)." เหรียญ"."<br>";
       }if($money>=1){
           $sum8=$money/1;
           $sum8s=floor($sum8)*1;
           $money=$money-$sum8s;
           echo "มีจำนวนเหรียญ 1 = ".floor($sum8)." เหรียญ"."<br>";
       }if($money>=0.75){
           echo "มีจำนวนเหรียญ 0.75 = 1 เหรียญ"."<br>";
           $money=$money-0.75;
       }if($money>=0.50){
           $money=$money-0.50;
           echo "มีจำนวนเหรียญ 0.50 = 1 เหรียญ"."<br>";
       }

       ?>

     </div>




@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript">

   $( document ).ready(function() {
	test();
	});

    function test() {
    x = 5000;
    y= 1560;
total = x-y;

if(total >= 1000){

    n = total/1000;

    sum = n*1000;

    s = total-1000;

    ntwo = s/500;

    stwo = s-500;

    console.log(total,n,s,ntwo,stwo)
}
    }
</script>
