<?php

namespace App\Http;

class Response
{
    private $view;
    private $data;
    

    function __construct($view, $data)
    {
        $this->view = $view;
        $this->data = $data;
     
    }

    function send()
    {
        $content = file_get_contents(pathView($this->view));
        

        foreach ($this->data as $key=>$value) {
            $search = '{{'.$key.'}}';
            $content = str_replace($search, $value, $content);

        }


        require pathView('Layout');
    }

    function isViewActive($view)
    {
        return $this->view == $view ? "active" : "";
    }
}
