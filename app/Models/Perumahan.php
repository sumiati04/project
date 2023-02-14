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

    public $fillable = ['foto_rumah'];

    public function tipe(){
        return $this->belongsTo(Tipe::class, 'id_tipe');
    }

    public function image(){
        if ($this->foto_rumah && file_exists(public_path('image/fotorumah/' . $this->foto_rumah))){
            return asset('image/fotorumah/' .$this->foto_rumah);
        }
    }

    public function deleteImage(){
        if($this->foto_rumah && file_exists(public_path('image/fotorumah/' . $this->foto_rumah))){
            return unlink(public_path('image/fotorumah/' . $this->foto_rumah));
        }
    }
} 
