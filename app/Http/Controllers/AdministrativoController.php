<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrativoController extends Controller
{
    public function index(){
        return view('site.dashboard.administrativo.index');
    }
}