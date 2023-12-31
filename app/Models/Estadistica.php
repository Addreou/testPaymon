<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estadistica extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table    = 'estadisticas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'video_id',
        'type',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
