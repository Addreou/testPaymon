<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory, SoftDeletes;

    protected $connection = 'mysql';
    protected $table    = 'videos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'main_character',
        'type',
        'description',
        'url',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
