<?php
function countNumber($arr,$value){
    $count = 0;
    for ($i=0;$i<count($arr);$i++){
        if ($value==$arr[$i]){
            $count++;
        }
    }
    return $count;
}