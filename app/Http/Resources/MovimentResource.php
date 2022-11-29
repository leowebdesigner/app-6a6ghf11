<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovimentResource extends JsonResource
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
            'product_sku' => $this->product_sku,
            'quantidade' => $this->qtd,
            'movimentação' => $this->status,
            'data movimentação' => $this->created_at->format('d-m-Y H:i:s')
        ];
    }
}
