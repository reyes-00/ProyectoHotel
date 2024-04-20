<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){
        return view ('paginaHotelMetepec.index');
    }
    public function habitaciones(){
        return view ('paginaHotelMetepec.habitacion_sencilla');
    }
    public function about(){
        return view ('paginaHotelMetepec.about');
    }
    public function servicesDetails(){
        return view ('paginaHotelMetepec.services-details');
    }
    public function blog(){
        return view ('paginaHotelMetepec.blog');
    }
}
