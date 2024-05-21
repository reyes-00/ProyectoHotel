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
    public function suite(){
        return view ('paginaHotelMetepec.habitacion_suite');
    }
    public function habitaciones(){
        return view ('paginaHotelMetepec.habitaciones');
    }
    public function galeria(){
        return view ('paginaHotelMetepec.galeria');
    }
    public function contacto(){
        return view ('paginaHotelMetepec.contacto');
    }

    public function blog(){
        return view ('paginaHotelMetepec.blog');
    }

    public function restaurante(){
        return view ('paginaHotelMetepec.restaurante_menu');
    }
    public function politicashotel(){
        return view ('paginaHotelMetepec.politicashotel');
    }
    public function avisoprivacidad(){
        return view ('paginaHotelMetepec.avisoprivacidad');
    }
    public function idioma($idioma){
        return redirect()->back();
    }
}
