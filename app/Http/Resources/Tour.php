<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tour extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//         return parent::toArray($request);

        return [
            'id' => $this->first()->id,
            'thumb'=>$this->first()->thumb,
            'title' => $this->first()->title,
            'overview' => $this->first()->overview,
            'images' => json_decode( $this->first()->images),
            'itinerary'=>json_decode( $this->first()->itinerary),
        ];
    }
}
