<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/7
 * Time: 22:06
 */

$str = "13800138000 rr 13790977936 13435222630 15875900254";

$patt = '/(\d{3})(\d{4})(\d{4})/';

//preg_match_all($patt,$str,$src);
echo preg_replace($patt,'\1****\2',$str);
//print_r($src);