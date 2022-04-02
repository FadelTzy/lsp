<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wv extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function kontak()
    {
        return view('user.kontak');
    }
    public function berita()
    {
        return view('user.berita');
    }
    public function skema()
    {
        return view('user.skema');
    }
    public function tuk()
    {
        return view('user.tuk');
    }
    public function beritaslug()
    {
        return view('user.beritaslug');
    }
       public function profil()
    {
        return view('user.profil');
    }
    public function skemaslug()
    {
        return view('user.skemaslug');
    }
    public function faq()
    {
        return view('user.faq');
    }
}
