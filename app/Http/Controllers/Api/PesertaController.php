<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PesertaModel;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index(){
        $data = PesertaModel::paginate(10);
        return response()->json($data);
    }
}
