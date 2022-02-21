<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang ";
    }

      public function about(){
        return "Muhammad Rizki Mubarok 2041720001 ";
    }

      public function articles($id){
        return "Halaman Artikel Dengan ID ". $id;
    }

}
