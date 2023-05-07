<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Iklan;
use App\Models\Karier;
use App\Models\KategoriToko;
use App\Models\Map;
use App\Models\PopularFitur;
use App\Models\Sosmed;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('welcome',[
            'banner' => Banner::find(1),
            'sosmed' => Sosmed::all(),
            'populars' => PopularFitur::all(),
            'kategories' => KategoriToko::all(),
            'map' => Map::find(1),
            'iklan' => Iklan::all(),
            'tentang' => TentangKami::find(1),
            'karier' => Karier::all(),

        ]);
    }
}
