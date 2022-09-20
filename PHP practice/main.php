<!-- 代入演算子””で文字列何も囲まないのを数字と判断 -->
<!-- $appleりんごの値段、$apple_numはりんごを買う数-->
<?php
$apple = 350;
$apple_num = rand(1,10);
// option+¥マークで改行コードうてる。＼nで改行

echo "りんごの値段:".$apple."円\n";
echo "りんごを買うかず:".$apple_num."個\n";
$total = $apple * $apple_num;
echo "合計" .$total."円です。";
?>

