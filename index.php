<?php
    function findMax($arr) {
        $max = $arr[0][0];
        foreach ($arr as $key1 => $value) {
            foreach ($arr[$key1] as $key2 => $item){
                if($arr[$key1][$key2] > $max) {
                    $max = $arr[$key1][$key2];
                }
            }
        }
        return $max;
    }
    $arr =
        [
            [1,2,5,9,8,4,2],
            [2,4,5,7,11,2]
        ];
    echo findMax($arr);
?>
