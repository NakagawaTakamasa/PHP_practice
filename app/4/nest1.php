<?php

$attend = 1;
//欠席は0　出席は1
$place = chr(mt_rand(65,66));

if($attend === 0){
  echo 'パーティーは欠席にて承りました。<br>';
}else{
  echo 'パーティーは出席にて承りました。<div class=""></div><br>';
  if($place === 'A'){
    echo '会場はAホテルでございます。';
  }elseif($place === 'B'){
    echo '会場はB広場でございます。';
  }
}
