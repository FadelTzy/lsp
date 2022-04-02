<?php

namespace App\Http\Controllers;

use App\Models\Profillsp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Anggota;

class ProfillspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = Profillsp::first();
        $anggota = Anggota::get();
        return view('admin.profillsp', compact('profil','anggota'));
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
        $validator = Validator::make($request->all(), [
            'nama' => ['string', 'max:255'],
            'visi' => ['string'],
            'misi' => ['string'],
            'mutu' => ['string'],
            'tentang' => ['string'],
        ]);
        if ($validator->fails()) {
            $data = ['status' => 'error', 'data' => $validator->errors()];
            return $data;
        }
        try {
            $user = Profillsp::where('id', 1)->update([
                'nama' => $request->nama,
                'tentang' => $request->tentang,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'mutu' => $request->mutu,
            ]);
            if ($user) {
                return 'success';
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }
    public function storek(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'alamat' => ['string', 'max:255'],

            'no' => ['string'], 'email' => ['string'],
        ]);
        if ($validator->fails()) {
            $data = ['status' => 'error', 'data' => $validator->errors()];
            return $data;
        }
        try {
            $user = Profillsp::where('id', 1)->update([
                'alamat' => $request->alamat,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'wa' => $request->wa,
                'ig' => $request->ig,
                'email' => $request->email,
                'lokasi' => $request->lokasi,
                'no' => $request->no,

            ]);
            if ($user) {
                return 'success';
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profillsp  $profillsp
     * @return \Illuminate\Http\Response
     */
    public function show(Profillsp $profillsp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profillsp  $profillsp
     * @return \Illuminate\Http\Response
     */
    public function edit(Profillsp $profillsp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profillsp  $profillsp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profillsp $profillsp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profillsp  $profillsp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profillsp $profillsp)
    {
        //
    }
}
