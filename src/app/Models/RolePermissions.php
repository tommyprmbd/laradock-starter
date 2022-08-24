<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermissions extends Model
{
    use HasFactory;

    protected $fillable = ['role', 'permission', 'description', 'active'];

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    public function role()
    {
        return $this->belongsTo(Roles::class, null, 'name');
    }

    public function permission()
    {
        return $this->belongsTo(Permissions::class, null, 'name');
    }
}
