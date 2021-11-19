<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    use HasFactory;
    protected $fillable = ['res1', 'res2', 'res3', 'res4', 'res5', 'res6'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
