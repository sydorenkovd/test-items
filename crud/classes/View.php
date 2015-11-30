<?php

class View
{
    protected $data = [];
    const PATH = __DIR__ . '/../views/';
    public  function __set($k, $v){
        $this->data[$k] = $v;
    }
    public function __get($k){
        return $this->data[$k];
    }
//    public function assign($name, $value){
//        $this->data[$name] = $value;
//    }
/*
 * записываем и читаем данные из буффера
 */
    public function render($template){
        foreach($this->data as $key => $val){
            $$key = $val;
        }
        ob_start();
        include self::PATH . $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    public function display($template){
    echo $this->render($template);
    }

}