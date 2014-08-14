<? 
 echo " 3과목의 평균을 구해보아요 ";
 echo "---------------------------- <br />";                          // <--- 요즘은 단일태그는 끝에 /를 붙이더라구요 
$math = 100;
$english = 95;
$science = 85;

$sum = $math + $english + $science;       // < ===== $sum이라는 변수를 만들고 값은 3과목의 합이다.
$avg = $sum/3;                                           //     3으로나눠서 평균값이 $avg의 값이 된다.

echo " math point : $math <br /> english point : $english <br /> science point : $science <br />";
echo "======================== <br />";
echo " total : $sum <br />";
echo " average : $avg <br />";
echo "======================== <br />";
echo " what is the type of \$avg?  <br />";
echo gettype($avg);
?>