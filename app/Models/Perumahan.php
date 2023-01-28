<?php

namespace App\Models;

use App\Models\Tipe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perumahan extends Model
{
    use HasFactory;

    public $guarded = [];

    public $table = "perumahan";

    public function tipe(){
        return $this->belongsTo(Tipe::class, 'id_tipe');
    }
}
