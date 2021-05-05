<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $nama = 'Rifqie Muhammad';
        $kelas = 'TI-3E';
        $nim = '1841720065';
        $idol = ["Riko", "Maki", "Eli"];
        $vtuber = ["Evelyn", "Karissa", "Alia", "Lumi"];

        return view('biodata', ['nama' => $nama, 'kelas' => $kelas, 'nim' => $nim, 'idol' => $idol, 'vtuber' => $vtuber]);
    }
}
