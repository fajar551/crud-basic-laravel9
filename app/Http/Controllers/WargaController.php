<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class WargaController extends Controller
{
    public function index()
    {
        $warga = warga::all();
        return view('warga.index', compact(['warga']));
    }

    public function create()
    {
        return view('warga.create');
    }

    public function store(Request $request)
    {
        Warga::create($request->except(['_token', 'submit']));
        return redirect('/warga');
    }
}
