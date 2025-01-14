<?php

namespace App\Http\Controllers;

use App\Models\Kajian;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $kajianTerbaru = Kajian::latest()->limit(4)->orderBy('tahun', 'desc')->get();

        $daftarKajian = Kajian::all();

        $tahun = Carbon::now()->isoFormat('Y');
        return dd($kajianTerbaru);
        return view('welcome', compact('kajianTerbaru', 'daftarKajian', 'tahun'));
    }

}
