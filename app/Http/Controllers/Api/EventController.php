<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EventModel;
use App\Models\TransactionModel;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $data = EventModel::paginate(10);
        return response()->json($data);
    }

    public function topEvent()
    {
        $topEvents = TransactionModel::selectRaw('ref_event.nama_event, SUM(qris_transaction.nominal) as total_transaksi')
            ->join('peserta_qris', 'qris_transaction.peserta_id', '=', 'peserta_qris.id')
            ->join('peserta_event', 'peserta_qris.id', '=', 'peserta_event.peserta_id')
            ->join('ref_event', 'peserta_event.event_id', '=', 'ref_event.id')
            ->groupBy('ref_event.nama_event')
            ->orderBy('total_transaksi', 'DESC')
            ->limit(5)
            ->get();

        return response()->json($topEvents);
    }
}
