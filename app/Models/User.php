<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $primaryKey = 'user_id';
    public $incrementing = true; // o false si no es autoincremental
    protected $keyType = 'int';  // o 'string' si no es numérico
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_name',
        'user_lastname',
        'user_email',
        'password',
        'user_status',
        'user_rolId'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    /* Eloquent Table Relationships */

    public function rol()
    {
        return $this->belongsTo(Role::class, 'user_rolId', 'rol_id');
    } 

    public function recipes(){

        return $this->hasMany(Recipe::class, 'recip_userId', 'user_id');
    }
}
