<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cicle extends Model
{
    use HasFactory;

    protected $table = 'cicles';
    public $timestamps = false;

    /**
     * Get all of the comments for the Cicle
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos()
    {
        return $this->hasMany(Curs::class, 'cicles_id');
    }

    /**
     * The roles that belong to the Cicle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
}
