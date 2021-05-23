<?php

namespace App\Http\Resources\Book;


use Illuminate\Http\Resources\Json\JsonResource;

class BookCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Book Title' => $this->title,
            'ISBN' => $this->isbn,
            'Description' => $this->description,
            'href' => [
                'link' => route('books.show', $this->id),
            ],
        ];
    }
}
