<?php

namespace bng\Controllers;

class Main
{
    public function index($id = null)
    {
        echo "Estou dentro do conrtolador Main - Index";
    }

    public function teste(){
        die("Aqui no teste!");
    }
}
