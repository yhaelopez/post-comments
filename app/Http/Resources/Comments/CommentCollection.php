<?php

namespace App\Http\Resources\Comments;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CommentCollection extends ResourceCollection
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
            'data' => CommentResource::collection($this->collection),
            'meta' => [
                'comments_count' => $this->collection->count()
            ]
        ];
    }
}
