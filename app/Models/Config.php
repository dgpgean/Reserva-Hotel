<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_id',
        'title',
    ];

    public function logo(){
        return $this->belongsTo(Files::class, 'logo_id');
    }
}
