<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TransactionModel;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $data = TransactionModel::paginate(10);
        return response()->json($data);
    }
}
