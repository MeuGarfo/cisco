<?php
//Criado por Anderson Ismael
//20 de Dezembro de 2018

function model($name,$data=false){
    $str=ROOT.'model/'.$name.'.php';
    if(file_exists($str)){
        if(is_array($data)){
            extract($data);
        }
        return require_once($str);
    }else{
        return false;
    }
}

