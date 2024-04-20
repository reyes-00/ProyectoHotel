<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){
        return view ('paginaHotelMetepec.layout.index');
    }
    public function index2(){
        return view ('paginaHotelMetepec.index-2');
    }
    public function about(){
        return view ('paginaHotelMetepec.about');
    }
    public function servicesDetails(){
        return view ('paginaHotelMetepec.services-details');
    }
}
