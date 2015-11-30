<?php

class View
{
    protected $data = [];
    const PATH = __DIR__ . '/../views/';
    public function assign($name, $value){
        $this->data[$name] = $value;
    }
    public function display($template){
        include self::PATH . $template;
    }

}