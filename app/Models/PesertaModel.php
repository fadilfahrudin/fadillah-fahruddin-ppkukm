<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesertaModel extends Model
{
    protected $table = 'peserta_qris';
    protected $fillable = ['id', 'nama_pemilik_qris', 'nama_usaha', 'verified', 'created_at', 'updated_at'];

    public function event()
    {
        return $this->hasMany(EventModel::class, 'peserta_id');
    }

    public function transactions()
    {
        return $this->hasMany(TransactionModel::class, 'peserta_id');
    }
}
