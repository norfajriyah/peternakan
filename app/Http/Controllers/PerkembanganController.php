<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perkembangan;

class PerkembanganController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'periode' => 'required',
            'tanggal' => 'required',
            'jml_populasi' => 'required',
            'atrain' => 'required',
            'bw_datang' => 'required',
            'kondisi' => 'required',
            'umur' => 'required',
            'std_feed' => 'required',
            'act_feed' => 'required',
            'mati_deplesi' => 'required',
            'culling_deplesi' => 'required',
            'afkir_deplesi' => 'required',
        ]);

        $perkembangan = Perkembangan::create($request->all());

        return response()->json($perkembangan, 201);
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
        $perkembangan = Perkembangan::findOrFail($id);
        $perkembangan->update($request->all());

        return response()->json($perkembangan, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perkembangan = Perkembangan::findOrFail($id);
        $perkembangan->delete();

        return response()->json(null, 204);
    }
}
