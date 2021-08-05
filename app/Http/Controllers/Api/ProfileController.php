<?php

namespace App\Http\Controllers\Api;

Use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = profile::all();

        return response()->json([
            'success' => true,
            'message' => 'Data Admin',
            'data'    => $profile
        ], 200);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namasaya' => 'required|unique:profile|max:255',
            'stock' => 'required|numeric',
            'tentangsaya' => 'required',
           'namapendidikan' => 'required',
           'jurusan' => 'required',
           'tahun' => 'required',
           'namausaha' => 'required',
           'posisi' => 'required',
           'keteranganusaha' => 'required',
           'nohp' => 'required|numeric',
           'email' => 'required',
           'instagram' => 'required',
           'alamat' => 'required',
           
            

        ]);

        $profile = profile::create([
        
       'namasaya' => $request->namasaya,
       'tentangsaya' => $request->tentangsaya,
       'namapendidikan' => $request->namapendidikan,
       'jurusan' => $request->jurusan,
       'tahun' => $request->tahun,
       'namausaha' => $request->namausaha,
       'posisi' => $request->posisi,
       'keteranganusaha' => $request->keteranganusaha,
       'nohp' => $request->nohp,
       'email' => $request->email,
       'instagram' => $request->instagram,
       'alamat' => $request->alamat,


        ]);
       if($profile){
           return response()->json([
            'success' => true,
            'message' => 'data berhasil ditambahkan',
            'data' => $profile
           ], 200);
       }else{
        return response()->json([
            'success' => false,
            'message' => 'data gagal ditambahkan',
            'data' => $profile
        ], 409);

       }

    }

/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = profile::all();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data ',
            'data'    => $profile
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $profil = profile::with('profile')->where('id', $id)->first();

    return response()->json([
        'success' => true,
        'message' => 'Edit ',
        'data'    => $profil
    ], 200);
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
        $request->validate([
            'namasaya' => 'required|unique:profile|max:255',
            'tentangsaya' => 'required',
           'namapendidikan' => 'required',
           'jurusan' => 'required',
           'tahun' => 'required',
           'namausaha' => 'required',
           'posisi' => 'required',
           'keteranganusaha' => 'required',
           'nohp' => 'required|numeric',
           'email' => 'required',
           'instagram' => 'required',
           'alamat' => 'required',
         
        ]);
        $fr = profile::find($id)
        ->update([
            'namasaya' => $request->namasaya,
            'tentangsaya' => $request->tentangsaya,
            'namapendidikan' => $request->namapendidikan,
            'jurusan' => $request->jurusan,
            'tahun' => $request->tahun,
            'namausaha' => $request->namausaha,
            'posisi' => $request->posisi,
            'keteranganusaha' => $request->keteranganusaha,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'instagram' => $request->instagram,
            'alamat' => $request->alamat,
        ]);
        return response()->json([
            'success' =>true,
            'message' =>'Data Barang Berhasil Diubah',
            'data' => $fr
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek = profile::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Hapus',
            'data'    => $cek
        ], 200);
    }
}
