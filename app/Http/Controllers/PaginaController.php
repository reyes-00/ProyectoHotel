<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){
        return view ('paginaHotelMetepec.index');
    }
    public function habitacion_sencilla(){
        return view ('paginaHotelMetepec.habitacion_sencilla');
    }
    public function habitacion_sencilla_plus(){
        return view ('paginaHotelMetepec.habitacion_sencilla_plus');
    }
    public function habitacion_doble(){
        return view ('paginaHotelMetepec.habitacion_doble');
    }
    public function habitacion_doble_plus(){
        return view ('paginaHotelMetepec.habitacion_doble_plus');
    }
    public function suit(){
        return view ('paginaHotelMetepec.suit');
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
