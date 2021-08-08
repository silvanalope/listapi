<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolio=[
            ['title'=>'proyeto #1'],
            ['title'=>'proyeto #2'],
            ['title'=>'proyeto #3'],
            ['title'=>'proyeto #4'],
        ];
        return view('portafolio', compact('portafolio'));
    }

    
}
