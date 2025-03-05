<?php

namespace Modules\Warehouse\Http\Requests;

use App\Services\Validators\JsonApiFormRequest;

class AddDiscountToProductRequest extends JsonApiFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function jsonApiAttributeRules(): array
    {
        return [
            'variation' => ['nullable', 'integer'],
            'percentage' => ['required', 'integer', 'min:1', 'max:100'],
            'start_date' => ['required', 'date', 'after_or_equal:today'],
            'end_date' => ['required', 'date', 'after:data.attributes.start_date'],
        ];
    }

    public function jsonApiCustomAttributes(): array
    {
        return [
            'variation' => 'variation',
            'percentage' => 'percentage',
            'start_date' => 'start date',
            'edn_date' => 'end date',
        ];
    }

    public function jsonApiCustomErrorMessages(): array
    {
        return [
            'end_date' => [
                'after' => 'The end date must be after start date.',
            ],
        ];
    }
}
