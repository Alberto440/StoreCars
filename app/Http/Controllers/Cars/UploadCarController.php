<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Models\car_dates;
use Illuminate\Http\Request;

class UploadCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('car.UploadCar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)//Store inserta los datos del formulario por POST
    {

        $request->validate([//Los campos sean obligatorios de introducir
            'Name' => 'required',
            'Transmission_type' => 'required',
            'Year' => 'required',
            'Price' => 'required',
            'Bodywork' => 'required',
            'Fuel_type' => 'required',
            'Mileage' => 'required',
            'file' => 'required'
        ]);

        $car = new car_dates;
        $car->Name = $request->Name;
        $car->Transmission_type = $request->Transmission_type;
        $car->Year = $request->Year;
        $car->Price = $request->Price;
        $car->Bodywork = $request->Bodywork;
        $car->Fuel_type = $request->Fuel_type;
        $car->Mileage = $request->Mileage;

        //img
        $entrada = $request->all();
        if ($archivo = $request->file('file')) {
            $nombre = $archivo->getClientOriginalName(); //Nombre de la img
            $archivo->move('img/imgUser', $nombre); //Donde se guarda la img
            $entrada['img'] = $nombre;
        }
        $car->img = $request->entrada;

        car_dates::create($entrada);

        return redirect()->route('search.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('car.UploadCar');
    }
}
