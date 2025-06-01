<?php

namespace App\Controllers;

class Konten extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('view_konten');
        echo view('templates/footer');
    }
}
