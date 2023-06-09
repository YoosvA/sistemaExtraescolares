<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct() {
        $this->middleware(['auth'])->only(['index']);
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index(){
        $titulo = "pagina principal";
        return view('index', compact('titulo'));
    }
}
