<? 
 echo " 3과목의 평균을 구해보아요 ";
 echo "---------------------------- <br />";   //  
$math = 100;
$english = 95;
$science = 85;

$sum = $math + $english + $science;            // 
$avg = $sum/3;                                 //    

echo " math point : $math <br /> english point : $english <br /> science point : $science <br />";
echo "======================== <br />";
echo " total : $sum <br />";
echo " average : $avg <br />";
echo "======================== <br />";
echo " what is the type of \$avg?  <br />";
echo gettype($avg);
?>
