<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'head_by',
        'NameKel',
        'NameOL',
        'AddressKel',
    ];

    public function kecamatan() {
        return $this->belongsTo(Kecamatan::class, 'head_by', 'id');
    }
}
