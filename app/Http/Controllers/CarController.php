<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $where = [];

        if( $request->tipoVeiculo ) {
            $where[] = ['tipoVeiculo', '=', $request->tipoVeiculo];
        }

        if( $request->marca ) {
            $where[] = ['marca', '=', $request->marca];
        }

        if( $request->modelo ) {
            $where[] = ['modelo', '=', $request->modelo];
        }

        if( $request->anoDe ) {
            $where[] = ['ano', '>=', $request->anoDe];
        }

        if( $request->anoAte ) {
            $where[] = ['ano', '<=', $request->anoAte];
        }

        if( $request->precoDe ) {
            $where[] = ['preco', '>=', $request->precoDe];
        }

        if( $request->precoAte ) {
            $where[] = ['preco', '<=', $request->precoAte];
        }

        if( $request->placaId ) {
            $where[] = ['placaId', '=', $request->placaId];
        }

        $cars = Car::where($where);

        if( $request->origem ) {
            $origem = explode('-', $request->origem);
            $cars = $cars->whereIn('origem', $origem);
        }

        if( $request->estado ) {
            $estado = explode('-', $request->estado);
            $cars = $cars->whereIn('estado', $estado);
        }

        $cars = $cars->get();

        if( $cars->count() > 0 ) {
            $result = $cars;
        }else{
            $result = [
                'message' => 'Veículo não encontrado!'
            ];
        }

        return response()->json($result);
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
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $car = Car::find($request->car);

        if($car){
            $result = $car;
        }else{
            $result = [
                'message' => 'Veículo não encontrado!!'
            ];
        }

        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
