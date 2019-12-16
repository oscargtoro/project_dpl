<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rol;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = DB::table('tb_roles')
        ->orderBy('rolNom')
        ->get();
        $rolxpermisos = DB::table('tb_rolxpermisos as rp')
        ->join('tb_roles as r', 'rp.rolCod', '=', 'r.rolCod')
        ->join('tb_permisos as p', 'rp.permisoCod', '=', 'p.permisoCod')
        ->select('r.rolNom', 'p.permisoNom')
        ->get();
        $rows = count($rolxpermisos);
        return view('rol.index', compact('roles', 'rolxpermisos', 'rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol = new Rol;
        $rol->nombre_rol = $request->nombre;
        $rol->save();
        return redirect()->route('rol.index')->with('status', 'guardado');
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
        $rol = Rol::findOrFail($id);
        $rolxpermisos = DB::table('tb_rolxpermisos as rp')
        ->join('tb_roles as r', 'rp.rolCod', '=', 'r.rolCod')
        ->join('tb_permisos as p', 'rp.permisoCod', '=', 'p.permisoCod')
        ->select('r.rolNom', 'r.rolCod', 'p.permisoNom', 'p.permisoCod')
        ->get();
        return view('rol.edit', compact('rol', 'rolxpermisos'));
        //return $rolxpermisos;
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
        $rol = Rol::findOrFail($id);
        $rol->nombre_rol = $request->nombre;
        $rol->save();
        return redirect()->route('rol.index')->with('status', 'actualizado');
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
