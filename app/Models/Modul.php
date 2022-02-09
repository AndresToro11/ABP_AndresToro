<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;

    protected $table = 'moduls';
    public $timestamps = false;

        /**
     * The modul that belong to the Curs
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function curs()
    {
        return $this->belongsToMany(Curs::class, 'moduls_has_cursos', 'moduls_id', 'cursos_id')->withPivot('curs_academic_id');
    }

}
