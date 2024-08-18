<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $name
 * @property mixed $surname
 * @property mixed $age
 * @property mixed $phone
 * @property mixed $code
 */
class ProfileResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'name' => $this->name,
          'surname' => $this->surname,
          'age' => $this->age,
          'phone' => $this->phone,
          'code' => $this->code
        ];
    }
}
