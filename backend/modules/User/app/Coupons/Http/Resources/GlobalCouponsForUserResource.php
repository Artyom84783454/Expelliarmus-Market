<?php

declare(strict_types=1);

namespace Modules\User\Coupons\Http\Resources;

use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;

class GlobalCouponsForUserResource extends JsonApiResource
{
    public function toAttributes(Request $request): array
    {
        return [
            'coupon' => $this->coupon_id,
            'discount' => $this->discount,
            'type' => $this->type->toString(),
            'expires_at' => $this->expires_at,
            'usage_number' => $this->usage_number,
        ];
    }
}