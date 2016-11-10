<?php

namespace App\Http\Controllers;


use App\Sede;
use Illuminate\Http\Request;
use App\Salon;
use App\Http\Requests;
use Symfony\Component\Console\Input\Input;

class salonController extends Controller
{
    //
    public function index() {
        $sedes = Sede::all();
        return View('admin/salon',compact('sedes'));
    }
    public function create(){

            $sedes = Sede::all();
            return View('admin/salon',compact('sedes'));


    }
    public function store(Request $request) {
        $salon = new Salon();
        $salon->piso=$request->piso;
        $salon->numero=$request->numero;
        $salon->sede=$request->sede;
        $salon->estado='disponible';


        $salon->save();
        return  view('welcome')->with('notice', 'El salón ha sido creado correctamente.');




    }
}
