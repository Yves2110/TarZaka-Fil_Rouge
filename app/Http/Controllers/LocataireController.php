<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocataireController extends Controller
{
    public function index()
    {
        return view('pages.locataires');
    }

    
    public function store()
    {
        return view('pages.locataireform');
    }
}
