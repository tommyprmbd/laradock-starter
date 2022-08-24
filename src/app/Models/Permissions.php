<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'group'];

    public $timestamps = false;

    protected $keyType = 'string';

    protected $primaryKey = 'name';

    public $incrementing = false;

    public function rolePermissions()
    {
        return $this->hasMany(RolePermissions::class, 'permission');
    }
}
