<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'nomor_ktp' => $this->ktp,
            'gender' => substr($this->ktp, 6, 1) % 2 == 0 ? 'Female' : 'Male',
            'birthdate' => '19' . substr($this->ktp, 0, 2) . '-' . substr($this->ktp, 2, 2) . '-' . substr($this->ktp, 4, 2),
        ];
    }
}
