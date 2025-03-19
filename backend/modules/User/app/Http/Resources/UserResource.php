<?php

declare(strict_types=1);

namespace Modules\User\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use TiMacDonald\JsonApi\JsonApiResource;

class UserResource extends JsonApiResource
{
    public function toAttributes(Request $request): array
    {
        $attributes = [
            'user_id' => Str::mask($this->user_id, '*', -12),
            'email' => $this->email,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'full_name' => $this->fullName(),
            'created_at' => $this->created_at->format('Y-m-d H:i').' '.Carbon::now()->timezone,
        ];

        if ($this->two_factor_secret) {
            $attributes['has2FA'] = $this->two_factor_secret;
        }

        if ($this->phone_number) {
            $attributes['phone_mask'] = Str::mask($this->phone_number, '*', -4);
            $attributes['phone_original'] = $this->phone_number;
        }

        return $attributes;
    }

    public function toId(Request $request): string
    {
        return $this->user_id;
    }
}