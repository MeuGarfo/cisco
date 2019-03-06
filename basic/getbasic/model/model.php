<?php
//Criado por Anderson Ismael
//20 de Dezembro de 2018

function model($name){
    $str=ROOT.'model/'.$name.'.php';
    if(file_exists($str)){
        return require_once($str);
    }else{
        return false;
    }
}

