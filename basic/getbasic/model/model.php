<?php
//Criado por Anderson Ismael
//20 de Dezembro de 2018

function model($name,$data=false){
    $str=ROOT.'model/'.$name.'.php';
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

