<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'NameKec',
        'NameOK',
        'AddressKec',
    ];

    public function kelurahans() {
        return $this->hasMany(Kelurahan::class, 'head_by', 'id');
    }
}
