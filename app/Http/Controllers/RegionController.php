<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function getkota(Request $request) {
        $id_provinsi = $request->id_provinsi;

        $kotas = Regency::where('province_id', $id_provinsi)->get();

        $option = "<option>Pilih Kota...</option>";

        foreach($kotas as $kota) {
            $option .= "<option value='$kota->id'>$kota->name</option>";
        }

        echo $option;
    }

    public function getkecamatan(Request $request) {
        $id_kota = $request->id_kota;

        $kecamatans = District::where('regency_id', $id_kota)->get();

        $option = "<option>Pilih Kecamatan...</option>";

        foreach($kecamatans as $kecamatan) {
            $option .= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }

        echo $option;
    }

    public function getkelurahan(Request $request) {
        $id_kecamatan = $request->id_kecamatan;

        $kelurahans = Village::where('district_id', $id_kecamatan)->get();

        $option = "<option>Pilih Kelurahan...</option>";

        foreach($kelurahans as $kelurahan) {
            $option .= "<option value='$kelurahan->id'>$kelurahan->name</option>";
        }

        echo $option;
    }
}
