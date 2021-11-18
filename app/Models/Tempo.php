<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempo extends Model
{
    use HasFactory;
    protected $fillable = ['dia', 'mes', 'ano'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

