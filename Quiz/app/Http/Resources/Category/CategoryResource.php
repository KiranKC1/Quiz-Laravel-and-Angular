<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'category_title' => $this->title,
            'href' => [
                'informations' => route('informations.index',$this->id),
                'questions' => route('questions.index',$this->id)
            ]
        ];
    }
}
