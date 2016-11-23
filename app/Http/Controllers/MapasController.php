<?php

namespace App\Http\Controllers;

use App\Sede;
use Illuminate\Http\Request;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MapasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $config = array();
        $config['apiKey'] = 'AIzaSyDkx6UVjmqocv8vsd9GHvbFWJOUXTbg38U';
        $config['center'] = '3.3983751,-76.5504763';
        $config['map_width'] = 550;
        $config['map_height'] = 550;
        $config['zoom'] = 'auto';
        /*$config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())

            });
        }
        centreGot = true;';

        */

        Gmaps::initialize($config);
        // Colocar el marcador

        $marker = array();
        $marker['position']='3.4703934,-76.5274137';
        $marker['infowindow_content'] = 'Sede Norte';
        Gmaps::add_marker($marker);
        $marker = array();
        $marker['position']='3.3328657,-76.5246944';
        $marker['infowindow_content'] = 'Sede Sur';
        Gmaps::add_marker($marker);
        $marker = array();
        $marker['position']='3.465817,-76.5251922';
        $marker['infowindow_content'] = 'Avenida estación 1(Centro de idiomas)';
        Gmaps::add_marker($marker);
        $marker = array();
        $marker['position']='3.4663838,-76.5254605';
        $marker['infowindow_content'] = 'Avenida estación 2';
        Gmaps::add_marker($marker);


        $map = Gmaps::create_map();

        //Devolver vista con datos del mapa
        return view('/mapa/ubicacion', compact('map'));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sede = Sede::where('id', '=', $id)->firstOrFail();

        $config = array();
        $config['apiKey'] = 'AIzaSyDkx6UVjmqocv8vsd9GHvbFWJOUXTbg38U';
        $config['center'] = $sede->latidud.','.$sede->longitud;
        $config['map_width'] = 550;
        $config['map_height'] = 550;
        $config['zoom'] = 'auto';


        Gmaps::initialize($config);
        // Colocar el marcador

        $marker = array();
        $marker['position']=$sede->latidud.','.$sede->longitud;;
        $marker['infowindow_content'] = 'Sede '.$sede->nombre_sede;
        Gmaps::add_marker($marker);


        $map = Gmaps::create_map();

        //Devolver vista con datos del mapa
        return view('/mapa', compact('map'));
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
