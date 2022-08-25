<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public $timestamps = false;

    protected $primaryKey = 'name';

    protected $keyType = 'string';

    public $incrementing = false;

    public function admins()
    {
        return $this->hasMany(Admins::class, 'role');
    }

    public function rolePermissions()
    {
        return $this->hasMany(RolePermissions::class, 'role');
    }
}
