<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function addzero($int) {
    if($int<10){
        return '0'.$int;
    }else{
        return $int;
    }
}