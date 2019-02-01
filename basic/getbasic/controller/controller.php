<?php
//Criado por Anderson Ismael
//21 de janeiro de 2019

function controller($name,$data=false){
    $str=ROOT.'controller/'.$name.'.php';
    if(file_exists($str)){
        if(is_array($data)){
            extract($data);
        }
        require_once($str);
        return true;
    }else{
        return false;
    }
}
