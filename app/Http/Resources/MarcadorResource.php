<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MarcadorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'enlace' => $this->enlace,
            'image' => $this->image,
            'descripcion' => $this->descripcion,
            'categoria' => new CategoriaResource($this->whenLoaded('categoria')),
        ];
    }
}
