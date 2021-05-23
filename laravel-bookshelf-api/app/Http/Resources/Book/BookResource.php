<?php

namespace App\Http\Resources\Book;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            
            'title' => $this->title,
            'isbn' => $this->isbn,
            'description' => $this->description,
            'href' => [
                'genres' => route('genres.index', $this->id),
                'authors' => route('authors.index', $this->id),
            ],
        ];
    }
}
