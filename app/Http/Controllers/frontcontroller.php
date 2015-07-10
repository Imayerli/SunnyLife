<?php

namespace WorldCorean\Http\Controllers;

use Illuminate\Http\Request;

use WorldCorean\Http\Requests;
use WorldCorean\Http\Controllers\Controller;

class frontcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       return view('index'); 
    }
    public function Suscriptores()
    {
        return view('Suscriptores'); 
    }
    public function Galeria()
    {
        return view('Galeria'); 
    }

}
