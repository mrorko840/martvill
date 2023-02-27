<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request = [])
    {
        return [
            'id' => $this->id,
            'image' => $this->filesUrlold(),
            'product_name' => optional($this->product)->name,
            'user_name' => optional($this->user)->name,
            'user_image' => $this->user->fileUrl(),
            'comments' => $this->comments,
            'rating' => $this->rating,
            'status' => $this->status == 'Active' && $this->is_public == '1' ? 'Approve' : 'Unapprove',
            'created_at' => timeZoneFormatDate($this->created_at)
        ];
    }
}
