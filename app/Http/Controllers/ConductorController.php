<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Conductores;

use Laracasts\Flash\Flash;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $con = Conductores::orderBy('nameConductor','ASC')->get();

        return view('conductores.index')
            ->with('con', $con);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conductores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $con = new Conductores();
        $con->fill($request->all());

        $con->save();

        Flash::success('Se ha registrado el conductor '.$request->nameConductor.' '.$request->apellidoConductor.' correctamente');
        return redirect()->route('conductor.index');
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
        $con = Conductores::find($id);

        return view('conductores.edit')
            ->with('con', $con);
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
        $con = Conductores::find($id);
        $con->fill($request->all());

        $con->save();

        Flash::success('Se actualizo el registro del conductor '.$request->nameConductor.' satisfactoriamente');

        return redirect()->route('conductor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $con = Conductores::find($id);
        $con->delete();

        Flash::error('Se ha eliminado el conductor '.$con->nameConductor.' satisfactoriamente');

        return redirect()->route('conductor.index');
    }
}
