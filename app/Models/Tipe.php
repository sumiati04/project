<?php

namespace App\Models;

use App\Models\Perumahan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;
    public $table = "tipe";

    public $guarded = [];

    public function perumahan()
    {
        return $this->hasMany(Perumahan::class, 'id_tipe');
    }
}
