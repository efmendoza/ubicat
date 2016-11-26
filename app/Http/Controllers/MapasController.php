<?php

namespace App\Http\Controllers;

use App\Sede;
use Illuminate\Http\Request;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MapasController extends Controller
{
    /**
     * Muestra la ubicación de todas las sedes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sedes = Sede::all();


        $config = array();
        $config['apiKey'] = 'AIzaSyDkx6UVjmqocv8vsd9GHvbFWJOUXTbg38U';
        $config['center'] = '3.405966,-76.533305';
        $config['map_width'] =550;
        $config['map_height'] = 550;
        $config['zoom'] = '12';



        Gmaps::initialize($config);
        // Colocar el marcador

        foreach ($sedes as $sede) {
            $position=$sede->latitud.','.$sede->longitud;
            $marker = array();
            $marker['position']=$position;
            $marker['infowindow_content'] = 'Sede '.$sede->nombre_sede;
            Gmaps::add_marker($marker);
        }


        $map = Gmaps::create_map();

        //Devolver vista con datos del mapa
        return view('admin/mapa/ubicacion', compact('map'));

        //return $position;
        //
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
    }

    /**
     * Muestra la ubicación de una sede.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {


        $sede = Sede::where('id', '=', $id)->firstOrFail();

        $position=$sede->latitud.','.$sede->longitud;
        $config = array();
        $config['apiKey'] = 'AIzaSyDkx6UVjmqocv8vsd9GHvbFWJOUXTbg38U';
        $config['center'] = $position;
        $config['map_width'] =550;
        $config['map_height'] = 550;
        $config['zoom'] = 'auto';


        Gmaps::initialize($config);
        // Colocar el marcador

        $marker = array();
        $marker['position']=$position;
        $marker['infowindow_content'] = 'Sede '.$sede->nombre_sede;
        Gmaps::add_marker($marker);


        $map = Gmaps::create_map();

        //Devolver vista con datos del mapa
        return view('admin/mapa/ubicacion', compact('map'));
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
     * Muestra la ruta hacia una sede
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ruta($id)
    {

        $sede = Sede::where('id', '=', $id)->firstOrFail();
        $position=$sede->latitud.','.$sede->longitud;
        $config = array();
        $config['apiKey'] = 'AIzaSyDkx6UVjmqocv8vsd9GHvbFWJOUXTbg38U';
        $config['center'] = 'auto';
        $config['map_width'] = 550;
        $config['map_height'] = 550;
        $config['zoom'] = 'auto';
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())

            });
        }
        centreGot = true;';


        $config['directions'] = TRUE;
        $config['directionsStart'] = 'auto';
        $config['directionsEnd'] = $position;
        $config['directionsDivID'] = 'directionsDiv';

        Gmaps::initialize($config);


        //Devolver vista con datos del mapa*/
        $map = Gmaps::create_map();
        return view('admin/mapa/ubicacion', compact('map'));

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
