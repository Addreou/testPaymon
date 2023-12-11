<?php

namespace App\Models;

use App\Enums\TipoEstadistica;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    public function statsViews(): HasMany
    {
        return $this->hasMany(Estadistica::class,'video_id','id')->where([['type',TipoEstadistica::VISTA->value],['deleted_at', NULL]]);
    }

    public function statsSearches(): HasMany
    {
        return $this->hasMany(Estadistica::class,'video_id','id')->where([['type',TipoEstadistica::BUSQUEDA->value],['deleted_at', NULL]]);
    }
}
