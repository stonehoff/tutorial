<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kec = DB::table('s_kecamatan')
            ->pluck('s_namakec', 's_idkec')
            ->prepend('--- Select Kecamatan ---', '');

        return view('bertingkat.index', compact('data_kec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


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

    public function getKelurahan(Request $request)
    {
        if($request->ajax()){
            $idkec = $request->idkec;

            $data_kel = DB::table("s_kelurahan")
                  ->selectRaw("s_namakel, s_idkel")
                  ->where('s_idkeckel', '=', $idkec)
                  ->orderBy('s_idkel', 'asc')
                  ->pluck('s_namakel', 's_idkel');

            $data['data_kel'] = view('selection.select-kelurahan',compact('data_kel'))->render();

            return response()->json($data);
        }
    }
}
