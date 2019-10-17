<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return dd($data);
    }
}
