<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang!';
    }
    public function about()
    {
        return 'NIM : 2041720055 <br> Nama : Dina Rifa Rosyida';
    }
    public function articles ($id){
        return 'Halaman Artikel dengan Id '.$id;
    }
}
