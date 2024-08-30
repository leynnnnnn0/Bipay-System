<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'fullName' => ucfirst($this->firstName) . ' ' . ucfirst($this->lastName),
            'created_at' => $this->created_at->toFormattedDateString(),
        ];
    }
}
