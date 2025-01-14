<?php

namespace App\Http\Controllers;

use App\Models\Kajian;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $kajianTerbaru = Kajian::latest(2);

        $daftarKajian = Kajian::all();

        $tahun = Carbon::now()->isoFormat('Y');

        return view('welcome', compact('daftarKajian', 'tahun'));
    }

}
