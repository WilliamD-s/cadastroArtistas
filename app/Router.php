<?php

class Router{
    public function redirect($url){

        $controller = "ArtistaController";
        $action = "index";
        $id = null;

        if(isset($url['act']) && $url['act'] != "" && 
            method_exists( $controller, $url['act'])){
            $action = $url['act'];
        }
        if(isset($url['item']) && $url['item'] != ""){
            $id = $url['item'];
        }

        call_user_func_array(array(new $controller, $action), array('id' => $id));
    }
}