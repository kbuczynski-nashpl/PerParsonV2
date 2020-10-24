<?php

namespace App\Http\Resources\Api\Crm;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

/**
 * Class CrmCompanyType Resource
 *
 * @package App\Http\Resources\Api\Crm
 * @property int         $id
 * @property string      $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class CrmCompanyType extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'   => $this->id,
            'type' => $this->type,
        ];
    }
}
