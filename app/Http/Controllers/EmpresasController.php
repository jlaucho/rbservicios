<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Empresa;

use Laracasts\Flash\Flash;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empre = Empresa::all();
        return view('empre.index')
            ->with('empre', $empre);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empre = new Empresa();
        $empre->fill($request->all());
        $empre->save();

        Flash::success('La empresa '.$request->name.' se ha registrado correctamente');

        return redirect()->route('empre.index');
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
        $empre = Empresa::find($id);

        return view('empre.edit')
            ->with('empre', $empre);
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
        $empre = Empresa::find($id);
        $empre->fill($request->all());
        $empre->save();

        Flash::success('La empresa se ha actualizado correctamente');

        return redirect()->route('empre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empre = Empresa::find($id);
        $empre->delete();

        Flash::error('La empresa '. $empre->name .' de ha eliminado correctamente');

        return redirect()->route('empre.index');
    }
}
