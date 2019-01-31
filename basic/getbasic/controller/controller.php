<?php
//Criado por Anderson Ismael
//21 de janeiro de 2019

function controller($names,$data=false){
    if(is_array($names)){
        foreach($names as $name){
            openController($name,$data);
        }
    }else{
        openController($names,$data);
    }
}

function openController($name,$data=false){
    $str=ROOT.'controller/'.$name.'.php';
    if(file_exists($str)){
        if(is_array($data)){
            extract($data);
        }
        require_once($str);
    }else{
        die('<b>Erro:</b><br>'.PHP_EOL.'<br>Controller <b>'.$name.'</b> não encontrado'.PHP_EOL);
    }
}
