<?php 
$arrays = [100, 78, 33, 11, 5, 0];
$newarray = [];
$count = count($arrays);//6
for($i=(count($arrays) -1) ; $i >= 0; $i-- ){
    $newarray[] = $arrays[$i]  ;
}
print_r( $newarray);

?>