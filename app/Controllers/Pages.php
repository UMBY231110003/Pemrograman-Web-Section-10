<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'nama'   => 'Alviyan Dhafin Husna',
            'nim'    => '231110003',
            'alamat' => 'Kota Bekasi, Jawa Barat',
            'hobi'   => ['Bermain game', 'Menonton video'],
            'prodi'  => 'Teknik Informatika'
        ];

        return view('biodata', ['data' => $data]);
    }
}
