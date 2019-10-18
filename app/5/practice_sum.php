<?php

$i = 1;
$sum = 0;
while($i <= 100){
  if($i % 7 === 0){
    echo $i.'は7の倍数<br>';
      $sum += $i;
    //前の値に上乗せして和を求める
  }
  $i++;
}

echo '合計は'.$sum;
