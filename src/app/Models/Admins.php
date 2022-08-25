<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admins extends Authenticatable
{
    use Notifiable, HasFactory;

    public const GUARD_ADMIN = 'admin';

    protected $table = 'admins';

    protected $guard = self::GUARD_ADMIN;

    protected $fillable = ['name', 'email', 'password', 'active', 'role'];

    protected $hidden = ['password', 'remember_token'];

    public function scopeIsActive( $query )
    {
        return $query->where('active', 1);
    }
}
