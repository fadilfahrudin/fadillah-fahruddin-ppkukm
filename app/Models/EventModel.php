<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    protected $table = 'ref_event';
    protected $fillable = ['id', 'nama_event', 'jadwal_pelaksanaan_mulai', 'jadwal_pelaksanaan_selesai', 'created_at', 'updated_at'];

    public function peserta()
    {
        return $this->hasMany(PesertaEventModel::class, 'event_id');
    }
}
