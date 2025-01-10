<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesertaEventModel extends Model
{
    protected $table = 'peserta_event';
    protected $fillable = ['id', 'peserta_id', 'nama', 'jenis_kelamin', 'event_id', 'created_at', 'updated_at'];

    public function peserta()
    {
        return $this->belongsTo(PesertaModel::class, 'peserta_id');
    }

    public function event()
    {
        return $this->belongsTo(EventModel::class, 'event_id');
    }
}
