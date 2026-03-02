<?php

namespace App\Modules\Auth\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class UserDetailsResource
 * @property-read \App\Modules\User\Models\User $resource
 */
final class UserDetailsResource extends JsonResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request = null): array
    {
        return [
            'id'    => $this->resource->id,
            'name'  => $this->resource->name,
            'email' => $this->resource->email,
        ];
    }

}
