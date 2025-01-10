<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PesertaEventModel;
use Illuminate\Http\Request;

class PesertaEventController extends Controller
{
    public function index(){
        $data = PesertaEventModel::paginate(10);
        return response()->json($data);
    }
}
