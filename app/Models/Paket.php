<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = 'paket';
    protected $guarded = [];
    protected $fillable = [
        'name',
        'user_id',
        'kota',
        'kode',
        'tanggal_keberangkatan',
        'tanggal_kepulangan',
        'expired_date',
        'status',
        'bandara',
        'airline',
        'flight',
        'kota_transit',
        'harga',
        'tiket',
        'visa',
        'akomodasi',
        'makan',
        'umroh',
        'tour',
        'airpot_handling',
        'bus',
        'zam',
        'passport',
        'created_at',
        'updated_at',
        'media'
    ];

    public function Biro()
    {
        return $this->beLongsTo(User::class, 'user_id');
    }
}
