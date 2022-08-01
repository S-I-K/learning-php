<?php
    function sum($x, $y){
        $result = $x + $y;
        return $result;
    }
    function output($val){
        echo '<pre>';
        print_r($val);
        echo '</pre>';
    }
    function increment(){
        static $count = 0;
        echo $count.'<br/>';
        $count++;
    }
?>