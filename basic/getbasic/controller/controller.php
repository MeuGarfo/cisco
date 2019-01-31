<?php
//Criado por Anderson Ismael
//21 de janeiro de 2019

function controller($names){
    if(is_array($names)){
        foreach($names as $name){
            openController($name);
        }
    }else{
        openController($names);
    }
}

function openController($name){
    $str=ROOT.'controller/'.$name.'.php';
    if(file_exists($str)){
        require_once($str);
    }else{
        die('<b>Erro:</b><br>'.PHP_EOL.'<br>Controller <b>'.$name.'</b> não encontrado'.PHP_EOL);
    }
}


