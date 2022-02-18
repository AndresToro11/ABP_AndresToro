<?php

namespace App\Http\Resources;

use App\Http\Resources\CursResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        /*return[
            'id' => $this->id,
            'sigles' => $this->sigles,
            'nom' => $this->nom,
            'descripcio' => $this->descripcio,
            'actiu' => $this->actiu,
            'curs' => CursResource::collection($this->cursos)
        ];*/
    }
}
