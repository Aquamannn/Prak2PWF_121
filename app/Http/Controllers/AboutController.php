<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
{
    // Kita simpan data dalam array agar rapi
    $data = [
        'nama'  => 'Muhammad Razzin Ayyuri',
        'nim'   => '20230140121',
        'prodi' => 'Teknologi Informasi',
        'hobi'  => 'Yakali ngoding, main Wuwa lahh :v',
    ];

    // Kirim variabel $data ke dalam view 'about'
    return view('about', $data);
    }
}