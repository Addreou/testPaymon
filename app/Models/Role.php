<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table    = 'roles';
    protected $primaryKey = 'id';

    public const IS_DEVELOPER = 1;
    public const IS_ADMIN = 2;
    public const IS_USER = 3;

    protected $fillable = [
        'name',
        'description',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
