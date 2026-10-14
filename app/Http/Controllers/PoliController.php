<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function index()
    {
        $polis = [
            ['id' => 1, 'nama_poli' => 'Poli Umum', 'gedung' => 'Gedung A'],
            ['id' => 2, 'nama_poli' => 'Poli Anak', 'gedung' => 'Gedung B'],
            ['id' => 3, 'nama_poli' => 'Poli Gigi', 'gedung' => 'Gedung A'],
            ['id' => 4, 'nama_poli' => 'Poli Mata', 'gedung' => 'Gedung C'],
        ];

        return view('poli.index', compact('polis'));
    }
}