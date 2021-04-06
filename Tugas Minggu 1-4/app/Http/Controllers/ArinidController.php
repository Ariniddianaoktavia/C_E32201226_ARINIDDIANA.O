<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArinidController extends Controller
{
    public function index()
    {    
       // return "Halo ini adalah method index, dalam controller ArinidController.";
        //return  "method ini nantinya akan digunakan untuk mengambil semua data user";
        $nama = "Arinid Diana Oktavia";

        $matkul = ["Jaringan Komputer","Fisika Teknik","Pemrograman Lanjut"];
        
        return view('Arinid', compact('nama','matkul'));
    }

    public function create()
    {
         return "method ini nantinya akan digunakan untuk menampilkan from untuk menambah data user";
    }

    public function store(Request $request)
    {
        return "method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }

    public function show($id)
    {
        return "method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
    }

    public function edit($id)
    {
        return "method ini nantinya akan digunakan untuk menampilkan from untuk data edit dengan id=" . $id;
    }

    public function update(Request $request, $id)
    {
        return "method ini nantinya akan digunakan untuk mengubah data user id=" . $id;
    }

    public function destroy($id)
    {
        return "method ini nantinya akan digunakan untuk menghapus data user id=" . $id;
    }
}