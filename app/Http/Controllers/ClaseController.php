<?php

namespace App\Http\Controllers;
use App\Clase;
use App\Salon;
use App\Sede;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $salons = Salon::all()->where('estado','disponible');
        $sedes = Sede::all();
        return view('clase',compact('salons','sedes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $array = explode(',' ,$request->get('salon'));
        $elsalon=$array[0];
        $lasede=$array[1];
       $clase= new Clase();

        $clase->nombre=$request->nombre;
        $clase->salon=$array[0];
        $clase->sede=$array[1];
        $clase->save();
        $salons = Salon::all();
        $sedes = Sede::all();


        $salons= DB::table('salons')->where('numero',$elsalon)
                        ->where('sede',$lasede)
                        ->update(['estado'=>'Ocupado']);



        return view('clase',compact('salons','sedes'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
