<?php

if(!function_exists('view')){
function view($view,$data=[]){
    return new \App\Http\Response($view,$data);
}

}

if(!function_exists('pathView')){

    function pathView($view)
        {
            return __DIR__.'/../views/'.$view.'.php';
           
        }
    
}