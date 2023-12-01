<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $nama = "Anggun Fitrani";
        $alamat = "Ciparay";
        $tanggal_lahir = "06 Desember 2001";
        $data_array = array(
            "nama" => array(
                "Anggun Fitriani", "Anggun", "Fitriani",
            ),
        );

        return view(
            'profile',
            compact(
                'nama',
                'alamat',
                'tanggal_lahir',
                'data_array'
            )
        );
    }
}