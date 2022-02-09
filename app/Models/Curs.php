<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curs extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    public $timestamps = false;

    /**
     * Get the user that owns the Cursos
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cicle()
    {
        return $this->belongsTo(Cicle::class, 'cicles_id');
    }

    /**
     * The modul that belong to the Curs
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function modul()
    {
        return $this->belongsToMany(Modul::class, 'moduls_has_cursos', 'cursos_id', 'moduls_id')->withPivot('curs_academic_id');
    }
}
