<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ProfileController extends Controller
{
    
    public function index()
    {
        
        $profile = Profile::orderBy('id', 'desc')->paginate(3);
        return view('profile.index', compact('profile'));
    }

    public function create()
    {
        
        return view('profile.create');
    }

    public function store(Request $request)
    {
        // validate the request...
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
        $profile = new profile;
        
        $profile->namasaya = $request->namasaya;
        $profile->tentangsaya = $request->tentangsaya;
        $profile->namapendidikan = $request->namapendidikan;
        $profile->jurusan = $request->jurusan;
        $profile->tahun = $request->tahun;
        $profile->namausaha = $request->namausaha;
        $profile->posisi = $request->posisi;
        $profile->keteranganusaha = $request->keteranganusaha;
        $profile->nohp = $request->nohp;
        $profile->instagram = $request->instagram;
        $profile->alamat = $request->alamat;
        
        $profile->save();

        return redirect('/');
    }

    public function show($id)
    {
        $profile= profile::where('id', $id)->first();
        return view ('profile.show', ['profil' => $profil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $profile= profile::where('id', $id)->first();
        return view ('profile.edit', ['profile' => $profile]);
    }
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
        profile::find($id)->update([
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


        return redirect ('/');
    }
    public function destroy($id)
    {
        profile::find($id)->delete();
        return redirect ('/');
    }
}


