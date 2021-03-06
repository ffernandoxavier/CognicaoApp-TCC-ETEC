<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'escolaridade',
        'sobrenome',
        'sexo',
        'dtnascimento',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function tempo()
    {
        return $this->hasOne(Tempo::class);
    }

    public function semana()
    {
        return $this->hasOne(Semana::class);
    }

    public function objeto()
    {
        return $this->hasOne(Objeto::class);
    }

    public function frase()
    {
        return $this->hasOne(Frase::class);
    }

    public function cor()
    {
        return $this->hasOne(Cor::class);
    }
}

