<?php

namespace bng\Controllers;

abstract class BaseController
{
    public function view($view, $data = [])
    {
        // check if data is array
        if (!is_array($data)) {
            die("Data is not an array" . var_dump($data));
        }

        // tranforms data into variables
        extract($data);

        // includes the file if exists
        $viewPath = __DIR__ . "/../views/$view.php";
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            die ("View does not exists: " . $view);
        }

        // A short explain about the extratc function below
        // $nomes = [
        //     'a' => 'joao'
        // ];
        // $a = 'joao';
    }
}
