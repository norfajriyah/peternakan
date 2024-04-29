<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doc;

class DocController extends Controller
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
            'id_user' => 'required',
            'tanggal' => 'required',
            'distributor' => 'required',
            'jns_ayam' => 'required',
            'jumlah_ayam' => 'required',
            'harga_kontrak' => 'required',
            'total_harga' => 'required',
        ]);

        $doc = Doc::create($request->all());

        return response()->json($doc, 201);
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
        $doc = Doc::findOrFail($id);
        $doc->update($request->all());

        return response()->json($doc, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doc = Doc::findOrFail($id);
        $doc->delete();

        return response()->json(null, 204);
    }
}
