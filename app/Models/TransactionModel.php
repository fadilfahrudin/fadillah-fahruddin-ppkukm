<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
    protected $table = 'qris_transaction';
    protected $fillable = ['id', 'peserta_id', 'tanggal_transaksi', 'nama_produk', 'nominal'];

    public function peserta()
    {
        return $this->belongsTo(PesertaModel::class, 'peserta_id');
    }
}
