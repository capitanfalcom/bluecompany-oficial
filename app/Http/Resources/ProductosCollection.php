<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductosCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data'=> [
                'id' => $this->id,
                'nombre' => $this->nombre,
                'valor' => $this->valor,
                'fecha_vencimiento' => $this->fecha_expiracion,
                'id_categoria' => $this->id_categoria,
            ],
        ];
    }
}
