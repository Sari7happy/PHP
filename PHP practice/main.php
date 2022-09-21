<select name="age">
<?php  
// while文は繰り返しの処理、年齢入力フォーム
$i =1;
while($i <=50){
    echo"<option>".$i."歳</option>";
    $i++;


}
?>

</select>