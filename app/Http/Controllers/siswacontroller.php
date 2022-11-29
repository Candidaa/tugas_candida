<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $dataSiswa = DB::table('siswa')->get();
        return view('account.student.index', compact('dataSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('account.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $request->validate([
        //     'nis' => 'required',
        //     'nama' => 'required',
        //     'alamat' => 'required',
        //     'jenis_kelamin' => 'required'

        // ])

        $query = DB::table('siswa')->insert([
            "nomor_induk_siswa" => $request ["nis"],
            "nama" => $request["nama"],
            "alamat" => $request["alamat"],
            "jenis_kelamin" => $request["jenis_kelamin"]
        ]);
        return redirect('/student');
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
        $showSiswaById = DB::table('siswa')->where('id', $id)->first();
        return view('account.student.show', compact('showSiswaById'));

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
        $showSiswaById = DB::table('siswa')->where('id', $id)->first(); 
        // Statement diatas sama dengan  Select * from siswa where id = $id
        return view('account.student.edit', compact('showSiswaById'));
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
        $query = DB::table('siswa')->where('id', $id)
        ->update([
            "nomor_induk_siswa" => $request ["nis"],
            "nama" => $request["nama"],
            "alamat" => $request["alamat"],
            "jenis_kelamin" => $request["jenis_kelamin"]
        ]);
        return redirect('/student')->with('success', 'Data telah ubah');
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
        $query = DB::table('siswa')->where('id', $id)->delete();
        return redirect('/student');
    }
}