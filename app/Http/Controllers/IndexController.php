<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class IndexController extends Controller
{
    protected function index()
    {

        $pdf = PDF::loadView('welcome');
        return $pdf->download('invoice.pdf');
    }
}
